import { CountUp } from '../libs/countUp.min.js';
window.onload = function(){
    AOS.init();
    countUpHours();
    countUpDays();
    countUpCustomers();
}


function countUpHours(){
    const options = {
      duration: 3,
    };
    let hrs = new CountUp(document.getElementById('workHours'), Number(document.getElementById('workHours').innerHTML), options);
    if (!hrs.error) {
      hrs.start();
    } else {
      console.error(hrs.error);
    }
}

function countUpDays(){
    const options = {
      duration: 3,
    };
    let days = new CountUp(document.getElementById('workDays'), Number(document.getElementById('workDays').innerHTML), options);
    if (!days.error) {
      days.start();
    } else {
      console.error(days.error);
    }
}

function countUpCustomers(){
    const options = {
      duration: 3,
    };
    let cs = new CountUp(document.getElementById('customersServed'), Number(document.getElementById('customersServed').innerHTML), options);
    if (!cs.error) {
      cs.start();
    } else {
      console.error(cs.error);
    }
}
