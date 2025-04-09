// function updateTimera() {

//     future = Date.parse("april 23, 2027 11:30:00");
//     now = new Date();
//     diff = future - now;

//     days = Math.floor(diff / (1000 * 60 * 60 * 24));
//     hours = Math.floor(diff / (1000 * 60 * 60));
//     mins = Math.floor(diff / (1000 * 60));
//     secs = Math.floor(diff / 1000);

//     d = days;
//     h = hours - days * 24;
//     m = mins - hours * 60;
//     s = secs - mins * 60;

//     document.getElementById("dealend")
//         .innerHTML =
//         '<div class="dealend-timer"><div class="time-block"><div class="time">' + d + '</div><span class="day">Days</span></div>' +
//         '<div class="time-block"><div class="time">' + h + '</div><span class="dots">:</span></div>' +
//         '<div class="time-block"><div class="time">' + m + '</div><span class="dots">:</span></div>' +
//         '<div class="time-block"><div class="time">' + s + '</div><span class="dots"></span></div></div>';

// }

// setInterval('updateTimera()', 1000);

function updateTimerForNextDay() {
    // Lấy thời gian hiện tại
    var now = new Date();

    // Tạo đối tượng thời gian cho 00:00 của ngày hôm sau
    var futuretime = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1, 0, 0, 0);

    // Tính toán thời gian còn lại
    var diff = futuretime - now;

    // Chuyển đổi thời gian còn lại thành ngày, giờ, phút, giây
    var days = Math.floor(diff / (1000 * 60 * 60 * 24));
    var hours = Math.floor(diff / (1000 * 60 * 60));
    var mins = Math.floor(diff / (1000 * 60));
    var secs = Math.floor(diff / 1000);

    var d = days;
    var h = hours - days * 24;
    var m = mins - hours * 60;
    var s = secs - mins * 60;

    // Cập nhật nội dung HTML của các phần tử có lớp được chỉ định
    // document.getElementById("dealend")
    //     .innerHTML =
    //         '<div class="dealend-timer"><div class="time-block"><div class="time">' + h + '</div><span class="dots">:</span></div>' +
    //         '<div class="time-block"><div class="time">' + m + '</div><span class="dots">:</span></div>' +
    //         '<div class="time-block"><div class="time">' + s + '</div><span class="dots"></span></div></div>';

    
        const dealEndElement = document.getElementById("dealend");
        if (dealEndElement) {
            dealEndElement.innerHTML =
                '<div class="dealend-timer"><div class="time-block"><div class="time">' + h + '</div><span class="dots">:</span></div>' +
                '<div class="time-block"><div class="time">' + m + '</div><span class="dots">:</span></div>' +
                '<div class="time-block"><div class="time">' + s + '</div><span class="dots"></span></div></div>';
        }
    ;
    
}

// Gọi hàm này mỗi giây để cập nhật bộ đếm
setInterval(function() {
    updateTimerForNextDay('timer1');  // Thay 'timer1' bằng lớp của đồng hồ bạn muốn cập nhật
}, 1000);


function updateTimer1() {
    var date = $('.timer1').data('date');
    futuretime = Date.parse(date);
    now = new Date();
    diff = futuretime - now;

    days = Math.floor(diff / (1000 * 60 * 60 * 24));
    hours = Math.floor(diff / (1000 * 60 * 60));
    mins = Math.floor(diff / (1000 * 60));
    secs = Math.floor(diff / 1000);

    d = days;
    h = hours - days * 24;
    m = mins - hours * 60;
    s = secs - mins * 60;

    let timers = document.querySelectorAll('.timer1')
    timers.forEach((e) => {
        e.innerHTML =
            '<div class="dealend-timer"><div class="time-block"><div class="time">' + d + '</div><span class="day">Days</span></div>' +
            '<div class="time-block"><div class="time">' + h + '</div><span class="dots">:</span></div>' +
            '<div class="time-block"><div class="time">' + m + '</div><span class="dots">:</span></div>' +
            '<div class="time-block"><div class="time">' + s + '</div></div></div>';
    })
}
setInterval('updateTimer1()', 1000);

function updateTimer2() {
    var date = $('.timer2').data('date');
    futuretime = Date.parse(date);
    now = new Date();
    diff = futuretime - now;

    days = Math.floor(diff / (1000 * 60 * 60 * 24));
    hours = Math.floor(diff / (1000 * 60 * 60));
    mins = Math.floor(diff / (1000 * 60));
    secs = Math.floor(diff / 1000);

    d = days;
    h = hours - days * 24;
    m = mins - hours * 60;
    s = secs - mins * 60;

    let timers = document.querySelectorAll('.timer2')
    timers.forEach((e) => {
        e.innerHTML =
        '<div class="dealend-timer"><div class="time-block"><div class="time">' + d + '</div><span class="day">Days</span></div>' +
        '<div class="time-block"><div class="time">' + h + '</div><span class="dots">:</span></div>' +
        '<div class="time-block"><div class="time">' + m + '</div><span class="dots">:</span></div>' +
        '<div class="time-block"><div class="time">' + s + '</div></div></div>';
})
}
setInterval('updateTimer2()', 1000);

function updateTimer3() {
    var date = $('.timer3').data('date');
    futuretime = Date.parse(date);
    now = new Date();
    diff = futuretime - now;

    days = Math.floor(diff / (1000 * 60 * 60 * 24));
    hours = Math.floor(diff / (1000 * 60 * 60));
    mins = Math.floor(diff / (1000 * 60));
    secs = Math.floor(diff / 1000);

    d = days;
    h = hours - days * 24;
    m = mins - hours * 60;
    s = secs - mins * 60;

    let timers = document.querySelectorAll('.timer3')
    timers.forEach((e) => {
        e.innerHTML =
        '<div class="dealend-timer"><div class="time-block"><div class="time">' + d + '</div><span class="day">Days</span></div>' +
        '<div class="time-block"><div class="time">' + h + '</div><span class="dots">:</span></div>' +
        '<div class="time-block"><div class="time">' + m + '</div><span class="dots">:</span></div>' +
        '<div class="time-block"><div class="time">' + s + '</div></div></div>';
})
}
setInterval('updateTimer3()', 1000);