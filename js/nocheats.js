document.oncontextmenu = () => {
  alert("Pls dont try to steal the codes Restricted By Rishab")
  return false;
}

document.onkeydown = e => {
  if(e.key == "F12"){
      alert("Pls dont try to steal the codes Restricted By Rishab")
      return false;
  }
  if((e.ctrlKey && e.key == "u") || (e.ctrlKey && e.key == "U")){
      alert("Pls dont try to steal the codes Restricted By Rishab")
      return false;
  }
  if((e.ctrlKey && e.shiftKey && e.key == "J") || (e.ctrlKey && e.key == "j")) {
      alert("Pls dont try to steal the codes Restricted By Rishab")
      return false;
  }
  if((e.ctrlKey && e.shiftKey && e.key == "C") || (e.ctrlKey && e.key == "c")) {
      alert("Pls dont try to steal the codes Restricted By Rishab")
      return false;
  }
  if((e.ctrlKey && e.shiftKey && e.key == "I") || (e.ctrlKey && e.key == "u")) {
      alert("Pls dont try to steal the codes Restricted By Rishab")
      return false;
  }
}

document.addEventListener('keydown', function (e) {
  if ((e.ctrlKey && e.shiftKey && e.key === 'I') || (e.ctrlKey && e.shiftKey && e.key === 'i')) {
      alert("Pls dont try to steal the codes Restricted By Rishab")
      e.preventDefault();
      return false;
  }
});