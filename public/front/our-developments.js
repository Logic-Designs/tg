const cards = document.getElementsByClassName("snip1156");

var modal = new tingle.modal({
  stickyFooter: false,
  closeMethods: ["overlay", "button", "escape"],
  closeLabel: "Close",
  cssClass: ["modal-class"],
  onOpen: function () {
    console.log("modal open");
  },
  onClose: function () {
    console.log("modal closed");
  },
  beforeClose: function () {
    // here's goes some logic
    // e.g. save content before closing the modal
    return true; // close the modal
    return false; // nothing happens
  },
});
const handleOpenModal = (index) => {
    const currentCard = cards[index];
    const img = currentCard.querySelector('img');
    const imgSrc = img.src; // Image source
    const imgAlt = img.alt; // Image alt text
  
    const h2 = currentCard.querySelector("h2");
    const h2Text = h2.textContent;
  
    const p = currentCard.querySelector("p");
    const pText = p.textContent;
  
    // Log the extracted values (optional)
    console.log(imgSrc);
    console.log(h2Text);
    console.log(pText);
  
    // Create the modal content with inline styles
    const modalContent = `
      <div class="pop" style="display: flex; flex-direction: row; align-items: center;">
        <div style="flex: 1; ">
          <img src="${imgSrc}" alt="${imgAlt}" style="width: 100%; height: 400px;">
        </div>
        <div style="flex: 1;height:400px;display:flex;flex-direction:column;
        align-items:center;justify-content:center;background-image:url(backgroundWhite-gray-pattern.jpg);
        background-position:center;background-size:cover;background-repeat:no-repeat;">
          <h2 style="margin-bottom: 10px;">${h2Text}</h2>
          <p>${pText}</p>
        </div>
      </div>
    `;
  
    // Open the modal and set the content
    modal.open();
    modal.setContent(modalContent);
  };
  
  

for (let i = 0; i < cards.length; i++) {
  cards[i].addEventListener("click", () => handleOpenModal(i));
}

// open modal

var swiper = new Swiper('.mySwiper', {
  slidesPerView: 1, // Default value for slidesPerView
  spaceBetween: 30, // Space between slides
  loop: true,
  autoplay: {
    delay: 3000,
  },
  breakpoints: {
    0: {
      slidesPerView: 1, // For screens 0px and up
    },
    500: {
      slidesPerView: 1, // For screens 500px and up
    },
    1000: {
      slidesPerView: 1, // For screens 1000px and up
    },
    1330: {
      slidesPerView: 1, // For screens 1330px and up
    },
    1460: {
      slidesPerView: 1, // For screens 1460px and up
    },
  },
  on: {
    slideChangeTransitionStart: function () {
      AOS.refresh();
    }
  },
});
