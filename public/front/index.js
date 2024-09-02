window.onload = function () {
  setTimeout(function () {
    var loader = document.querySelector(".preloader-container");
    loader.classList.add("active_new");
    //  $('.preloader').addClass('active');
    // Display your page content after preloader animation completes
    // document.body.style.overflow = 'auto'; // Restore scrolling
  }); // Adjust the duration as needed

  // Apply animations to each span element with a delay
  const spans = document.querySelectorAll(".preloader-text span");
  spans.forEach((span, index) => {
    setTimeout(() => {
      span.style.opacity = "1";
      span.style.animation = " expandWidth 10s forwards, fadeOut 5s forwards"; // Add fade-out animation
    }, index * 200); // Adjust the delay between each letter's animation
  });
};

$("#toggle").click(function () {
  $(this).toggleClass("on");
  $("#menu").slideToggle();
});
const phoneInput = document.querySelector("#phoneInput");

// Initialize intlTelInput
const iti = window.intlTelInput(phoneInput, {
  utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js",
});

// Set initial country based on the user's location
iti.promise.then(() => {
  const countryCode = iti.getSelectedCountryData().iso2;
  iti.setCountry(countryCode);
});

// Listen for the country change event
phoneInput.addEventListener("countrychange", function () {
  const countryCode = iti.getSelectedCountryData().iso2;
  console.log("Selected country code:", countryCode);
});
// document.addEventListener("DOMContentLoaded", () => {
//   setTimeout(() => {
//     function counter(id, start, end, duration) {
//       let obj = document.getElementById(id),
//         current = start,
//         range = end - start,
//         increment = end > start ? 1 : -1,
//         step = Math.abs(Math.floor(duration / range)),
//         timer = setInterval(() => {
//           current += increment;
//           obj.textContent = current;
//           if (current == end) {
//             clearInterval(timer);
//           }
//         }, step);
//     }
//     counter("count1", 0, 22, 4000);
//     counter("count2", 100, 33, 3500);
//     counter("count3", 0, 60, 4000);
//   }, 5000); // 3000 milliseconds = 3 seconds
// });
const counters = document.querySelectorAll(".counters span");
const container = document.querySelector(".counters");
let activated = false;

window.addEventListener("scroll", () => {
  if (
    window.pageYOffset > container.offsetTop - container.offsetHeight - 500 &&
    activated === false
  ) {
    counters.forEach((counter) => {
      counter.innerText = 0;
      let count = 0;
      const target = parseInt(counter.dataset.count);
      const increment = target / (2000 / 10); // 3000ms (3 seconds) / 10ms (interval)

      function updateCount() {
        count += increment;
        if (count < target) {
          counter.innerText = Math.ceil(count);
          setTimeout(updateCount, 10);
        } else {
          counter.innerText = target;
        }
      }

      updateCount();
    });
    activated = true;
  } else if (
    window.pageYOffset < container.offsetTop - container.offsetHeight - 500 ||
    (window.pageYOffset === 0 && activated === true)
  ) {
    counters.forEach((counter) => {
      counter.innerText = 0;
    });
    activated = false;
  }
});

$(".hover").mouseleave(function () {
  $(this).removeClass("hover");
});

//Start

// Select all <p> tags on the page
let paragraphs = document.querySelectorAll("p");

// Wrap each word in a span for all paragraphs
paragraphs.forEach((paragraph) => {
  let words = paragraph.textContent.split(" ");
  paragraph.innerHTML = words.map((w) => `<span>${w}</span>`).join(" ");
});

// Add scroll event listener to apply the highlight effect
window.addEventListener("scroll", () => {
  paragraphs.forEach((paragraph) => {
    let words = paragraph.querySelectorAll("span");
    let rect = paragraph.getBoundingClientRect();
    let paragraphTop = rect.top;
    let paragraphBottom = rect.bottom;

    // Check if the paragraph is in the viewport
    if (paragraphBottom > 0 && paragraphTop < window.innerHeight) {
      let visibleHeight =
        Math.min(window.innerHeight, paragraphBottom) -
        Math.max(0, paragraphTop);
      let scrollFraction = visibleHeight / rect.height;
      let words_highlighted = Math.floor(scrollFraction * words.length);

      words.forEach((word, i) => {
        if (i < words_highlighted) {
          word.classList.add("highlight");
        } else {
          word.classList.remove("highlight");
        }
      });
    } else {
      // Remove highlight if the paragraph is not in the viewport
      words.forEach((word) => word.classList.remove("highlight"));
    }
  });
});

// CSS for highlight effect
const style = document.createElement("style");
style.cssText = `
    .highlight {
        background-color: yellow !important; /* Highlight style */
    }
`;
document.head.appendChild(style);











