function addResponsiveness() {
    var tag = document.getElementById("navbar");
    if (tag.className === "topnav clearfix") {
      tag.className += " responsive";
    } else {
      tag.className = "topnav clearfix";
    }
  }