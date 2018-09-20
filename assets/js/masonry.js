console.log("hello");
function resizeGridItem(item) {
  var grid = document.getElementsByClassName("grid-container")[0];
  var rowHeight = parseInt(
    window.getComputedStyle(grid).getPropertyValue("grid-auto-rows")
  );
  var rowGap = parseInt(
    window.getComputedStyle(grid).getPropertyValue("grid-row-gap")
  );
  var rowSpan = Math.ceil(
    (item.querySelector(".recent-post__content").getBoundingClientRect()
      .height +
      rowGap) /
      (rowHeight + rowGap)
  );
  item.style.gridRowEnd = "span " + rowSpan;
}

function resizeAllGridItems() {
  var allItems = document.getElementsByClassName("grid-item");
  for (let x = 0; x < allItems.length; x++) {
    resizeGridItem(allItems[x]);
  }
}

window.onload = resizeAllGridItems;
