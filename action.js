// setInterval(() => {
//     var animat = document.getElementById('adminmsg')
//     animat.innerHTML = ""
// }, 1000);
// setInterval(() => {
//     var animat = document.getElementById('adminmsg')
//     animat.innerHTML = "Admission Open"
//     animat.style.color = "yellow"
// }, 1500);


// var index = 0;
// change();
// function change() {
//     //Collect all images with class 'slides'
//     var x = document.getElementsByClassName('slides');
//     //Set all the images display to 'none' (invisible)
//     for(var i = 0; i < x.length; i++) { 
//         x[i].style.display = "none"; 
//     }
//     //Increment index variable
//     index++;
//     //Set index to 1 if it's greater than the amount of images
//     if(index > x.length) { 
//         index = 1; 
//     }
//     //set image display to 'block' (visible)
//     x[index - 1].style.display = "block";
//     //set loop to change image every 3000 milliseconds (3 seconds)
//     setTimeout(change, 8000);


// }


var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}

/// increasing number
function startIncrementingCounters() {
    const counters = [
        { element: document.getElementById('counter1'), value: 0, target: 100 },
        { element: document.getElementById('counter2'), value: 0, target: 200 },
        { element: document.getElementById('counter3'), value: 0, target: 150 },
        { element: document.getElementById('counter4'), value: 0, target: 100 },
        { element: document.getElementById('counter5'), value: 0, target: 2050 },
        { element: document.getElementById('counter6'), value: 0, target: 15000 }
    ];

    const incrementSpeed = 50; // Speed of the increment in milliseconds
    const totalIncrements = 200; // Total number of increments

    counters.forEach(counter => {
        counter.incrementAmount = counter.target / totalIncrements;
    });

    let currentIncrement = 0;
    const incrementCounters = setInterval(() => {
        if (currentIncrement < totalIncrements) {
            counters.forEach(counter => {
                counter.value += counter.incrementAmount;
                counter.element.textContent = Math.floor(counter.value);
            });
            currentIncrement++;
        } else {
            clearInterval(incrementCounters);
            // Ensure final values are set to target values
            counters.forEach(counter => {
                counter.element.textContent = counter.target;
            });
        }
    }, incrementSpeed);
}

// Use IntersectionObserver to start incrementing when the section comes into view
document.addEventListener('DOMContentLoaded', () => {
    const triggerSection = document.getElementById('trigger-section');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startIncrementingCounters();
                // Once started, stop observing
                observer.unobserve(triggerSection);
            }
        });
    }, { threshold: 0.1 });

    observer.observe(triggerSection);
});





document.querySelectorAll('.curr_card_image-container').forEach(container => {
    const image = container.querySelector('.hover-image');
  
    container.addEventListener('mousemove', (e) => {
      const rect = container.getBoundingClientRect();
      const x = e.clientX - rect.left; // X coordinate within the container
      const y = e.clientY - rect.top;  // Y coordinate within the container
      
      // Calculate the percentage positions within the container
      const originX = (x / rect.width) * 100;
      const originY = (y / rect.height) * 100;
  
      // Set the transform-origin to the mouse position
      image.style.transformOrigin = `${originX}% ${originY}%`;
      image.style.transform = 'scale(1.8)';
    });
  
    container.addEventListener('mouseleave', () => {
      // Reset the transform when the mouse leaves the container
      image.style.transform = 'scale(1)';
    });
  });
  

