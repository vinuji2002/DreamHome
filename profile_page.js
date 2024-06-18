document.getElementById('myButton').addEventListener('edit', function() {
    var element = document.getElementById('animatedElement');
    var currentLeft = parseInt(element.style.left) || 0;
    var newLeft = currentLeft + 100; // Change the value to the desired movement distance
    element.style.left = newLeft + 'px';
  });
  form {
    width: 300px;
    margin: 0 auto;
  }
  
  .box {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 10px;
  }
  
  .btn {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  .btn:hover {
    background-color: #45a049;
  }
  