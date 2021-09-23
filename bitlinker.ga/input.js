function coloeSet(argObj) {
  // ==============================================
  //  入力済み時の背景色設定
  // ==============================================
  if (argObj.value == "") {
    argObj.style.backgroundColor = "";
  } else {
    argObj.style.backgroundColor = "rgba(30, 107, 185, 0.20)";
  }
}

function colorReset(argObj) {
  argObj.style.backgroundColor = "";
}
