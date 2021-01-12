window.onload = () => {
    createMap(100, 100)
    
}

function create2DArray(x, y){
  var arr = new Array(x); 
    
  // Loop to create 2D array using 1D array 
  for (var i = 0; i < arr.length; i++) { 
      arr[i] = new Array(y); 
  } 

  // Loop to initilize 2D array elements. 
  for (var i = 0; i < y; i++) { 
      for (var j = 0; j < x; j++) { 
          arr[i][j] = -1; 
      } 
  } 
  return arr;
}

function createMap(numx, numy){
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        console.log("hey");

          var responseJson = JSON.parse(this.responseText);
          
          let mapValues = create2DArray(numx, numy);
          for(var i = 0; i < responseJson.length ; i++){

            var temp = responseJson[i][1].split(',');
            console.log(temp);
            
            mapValues[parseInt(temp[0])][parseInt(temp[1])] = responseJson[i][0];
          }


          var table = document.createElement("TABLE");
          table.setAttribute("id", "map-grid");
          document.getElementById("content").appendChild(table);
          for(var x = 0; x < numx; x++){
            var row = document.createElement("TR");
            row.setAttribute("id", "row_"+x);
            document.getElementById("map-grid").appendChild(row);
            for(var y =0; y < numy; y++){
              var cell = document.createElement("TD");
              cell.style.backgroundColor = "white";
              cell.style.height = '10px';
              cell.style.width  = '10px';
              document.getElementById("row_"+x).appendChild(cell);
            }
          }
          paintMap(table, mapValues)   
        }
      }
      xhttp.open("GET", "php/mapQuery.php", true);
      xhttp.send(); 
  }

function paintMap(grid, map){
  for(var j = 0; j < map.length; j++){
    for(var i = 0; i < map[j].length; i++){

      if(map[i][j] == 0){
        grid.rows[i] //top - buttom
        .cells[j] // left - right
        .style.backgroundColor = "red"; 
    }

    else if(map[i][j] == 1){
        grid.rows[i] //top - buttom
        .cells[j] // left - right
        .style.backgroundColor = "blue"; 
    }

      else if(map[i][j] == 2){
        grid.rows[i] //top - buttom
        .cells[j] // left - right
        .style.backgroundColor = "green"; 
    }

    else if(map[i][j] == 3){
      grid.rows[i] //top - buttom
      .cells[j] // left - right
      .style.backgroundColor = "black"; 
    }
    else if(map[i][j] == 4){
      grid.rows[i] //top - buttom
      .cells[j] // left - right
      .style.backgroundColor = "orange"; 
    }
    }
  }
}