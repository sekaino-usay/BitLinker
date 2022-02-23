$(() => {
  targetBlank();

  function targetBlank() {
    let icon = $("<i></i>",  {
      "class": "bi bi-box-arrow-up-right mx-2 popup-icon"
    })
    // console.log(icon);
    $('a[target="_blank"]:not(.sns_link)').append(icon);
  }
})