let yid, department, subdepartment, teacher, halfyear;

$('#yid').change(function(){
    if($('.selections').children().length > 2){
        while ($('.selections').children().length > 2){
            $('.selections').children().last().remove();
        }
    }
    yid = $(this).val();
    $.get("http://local.dekanat.bsu.edu.ru/blocks/bsu_api/Teachers.php/department?yid="+yid, function (data) {
        let tempText = "<p>Выберите факультет/институт:</p>"+
                                "<select id='department'>" +
                                "<option selected>Выберите...</option>";
        data.forEach((dep) => {tempText += "<option value="+dep['departmentcode']+">"+dep['departmentname']+"</option>"});
        tempText += "</select>";
        $('.selections').append(tempText);
    });
});

$('.selections').on('change','#department',function (){
    if($('.selections').children().length > 4){
        while ($('.selections').children().length > 4){
            $('.selections').children().last().remove();
        }
    }
    department = $('.selections').children('#department').val();
    $.get("http://local.dekanat.bsu.edu.ru/blocks/bsu_api/Teachers.php/subdepartment?yid="+yid+
        "&departmentcode="+department, function (data) {
        let tempText = "<p>Выберите кафедру/ЦМК:</p>"+
            "<select id='subdepartment'>" +
            "<option selected>Выберите...</option>";
        data.forEach((subdep) => tempText +="<option value="+subdep['subdepartmentid']+">"+subdep['subdepartmentname']+"</option>");
        tempText += "</select>"
        $('.selections').append(tempText);
    });
});

$('.selections').on('change','#subdepartment',function (){
    if($('.selections').children().length > 6){
        while ($('.selections').children().length > 6){
            $('.selections').children().last().remove();
        }
    }
    subdepartment = $('.selections').children('#subdepartment').val();
    $.get("http://local.dekanat.bsu.edu.ru/blocks/bsu_api/Teachers.php/teachers?yid="+yid+
        "&subdepartmentid="+subdepartment, function (data) {
        let tempText = "<p>Выберите преподавателя:</p>"+
            "<select id='teachers'>" +
            "<option selected>Выберите...</option>";
        data.forEach((t) => tempText += "<option value="+t['teacherid']+">"+t['teacherfullname']+"</option>");
        tempText += "</select>";
        $('.selections').append(tempText);
    });
});

function newSet(arr){
    let arr2 = [];
    arr.forEach((elem1) => {
        let check = true;
        arr2.forEach((elem2) => {
            if(elem1[0] === elem2[0] && elem1[1] === elem2[1]){
                check = false;
            }
        });
        if(check) arr2.push(elem1);
    });
    return arr2;
}

function printTable(data){
    let pars = new Set();
    data.forEach((load) => pars.add(load['edworkkind']));
    let countAudin = countOutaudit = 0;
    pars.forEach((para) => {
        switch (para) {
            case '1Лкц':
            case '4Лаб':
            case '3Прк':
            case '2Сем':
                countAudin++;
                break;
            default:
                countOutaudit++;
                break;
        }
    });
    pars = Array.from(pars).sort();

    let tempText = '<br><h1>Нагрузка преподавателя</h1>' +
        '<table id="load">' +
        '<tr><th>Семестр</th><th>Дисциплина</th><th>Группы</th>' + (countAudin > 0 ? '<th colspan="' + countAudin + '">Аудиторные</th>' : '') +
        (countOutaudit > 0 ? '<th colspan="' + countOutaudit + '">Внеаудиторные</th>' : '') + '</tr>';
    if (countAudin > 0 || countOutaudit > 0) {
        tempText += '<tr><th colspan="3"></th>';
        pars.forEach((para) => tempText += '<th>' + para + '</th>');
        tempText += '</tr>';
    }

    let rows = [];
    data.forEach((potok) => {
        let checkOverlap = false;
        rows.forEach((cell) => {
            if (cell === [potok['dis'], potok['term']]) {
                checkOverlap = true;
            }
        });
        if (!checkOverlap) {
            rows.push([potok['dis'], potok['term']]);
        }
    });
    rows = newSet(rows);
    rows.sort(function (a, b) {
        if (a[1] > b[1]) {
            return 1;
        }
        if (a[1] < b[1]) {
            return -1;
        }
        return 0;
    });

    rows.forEach((row) => {
        tempText += '<tr><td>' + row[1] + '</td><td>' + (row[0] === null ? '' : row[0]) + '</td>';
        let groups = '<td>';
        let hours = '';
        pars.forEach((para) => {
            let count = 0;
            let check = true;
            data.forEach((d) => {
                if(row[0] === d['dis'] && row[1] === d['term'] && para === d['edworkkind']){
                    count += Math.max(d['hours'],d['hoursp']);
                    groups = groups.replaceAll(d['groupname'] + ', ','');
                    groups += d['groupname'] + ', ';
                    check = false;
                }
            });
            if(count !== 0){
                hours += '<td>' + count + '</td>'
            }
            else {
                hours += '<td></td>';
            }
        });
        groups = groups.slice(0, -2);
        groups += '</td>';
        tempText += groups + hours + '</tr>';
    });
    tempText += '</table>';
    $('.container').append(tempText);
}

$('.selections').on('change','#teachers',function (){
    if($('.selections').children().length > 8){
        while ($('.selections').children().length > 8){
            $('.selections').children().last().remove();
        }
    }
    if($('.container').children().length > 1){
        while ($('.container').children().length > 1){
            $('.container').children().last().remove();
        }
    }
    teacher = $('.selections').children('#teachers').val();
    $.get("http://local.dekanat.bsu.edu.ru/blocks/bsu_api/TeacherLoad.php/"+teacher+
        "?from=20"+(yid - 1)+"-09-01&to=20"+yid+"-07-31", function (data) {
        printTable(data);
    });

    $('.selections').append("<p>Выберите полугодие:</p>"+
        "<select id='halfyears'>" +
        "<option selected>Выберите...</option>" +
        "<option value='1'>Первое</option>" +
        "<option value='2'>Второе</option>" +
        "</select>");
});

$('.selections').on('change','#halfyears',function (){
    if($('.selections').children().length > 10){
        while ($('.selections').children().length > 10){
            $('.selections').children().last().remove();
        }
    }
    if($('.container').children().length > 1){
        while ($('.container').children().length > 1){
            $('.container').children().last().remove();
        }
    }
    halfyear = $('.selections').children('#halfyears').val();
    console.log(halfyear);
    switch(halfyear){
        case '1':
            halfyear = "from=20"+(yid - 1)+"-09-01&to=20"+(yid - 1)+"-12-31";
            break;
        case '2':
            halfyear = "from=20"+yid+"-01-01&to=20"+yid+"-07-31";
            break;
        default:
            halfyear = "from=20"+(yid - 1)+"-09-01&to=20"+yid+"-07-31";
            break;
    }
    $.get("http://local.dekanat.bsu.edu.ru/blocks/bsu_api/TeacherLoad.php/"+teacher+"?"+halfyear, function (data) {
        printTable(data);
    });
});
