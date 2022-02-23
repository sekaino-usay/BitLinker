
// body > div.flex {
//   /* background-color: #fddfff; */
//   background-image: linear-gradient(
//     135deg,
//     #e1dfff 0%,
//     #d4fffe 52%,
//     #fff9d6 85%
//   );
//   padding: 5px 0;
//   border-radius: 10px;
// }

// body > div.flex:nth-child(even) {
//   /* background-color: #fff9d6; */
//   background-image: linear-gradient(
//     45deg,
//     #fff9d6 20%,
//     #d4fffe 52%,
//     #e1dfff 90%
//   );
// }

$(() => {
  let altBgc = "body > div.flex";
  $(altBgc).css({
    "background-image": "linear-gradient(135deg, #e1dfff 0%, #d4fffe 52%, #fff9d6 85%)",
    "padding": "5px 0",
    "border-radius": "10px"
  });
  let evenOrOdd = $(altBgc).eq(0).children("div.flex_txt").next().length ? "odd" : "even"
  // console.log($(altBgc).eq(0).children("div.flex_txt").next().length);
  // console.log(Boolean($(altBgc).eq(0).children("div.flex_txt").next().length));
  $(`${altBgc}:${evenOrOdd}`).css("background-image", "linear-gradient(45deg, #fff9d6 20%, #d4fffe 52%, #e1dfff 90%)");
})
