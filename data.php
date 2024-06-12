<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch and Display Data</title>
    <style>
        input[type='file']::file-selector-button {
            background-color: green;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
        .image-container {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .image-container img {
            max-width: 300px;
            height: 300px;
        }
        .fruit-info {
            margin-top: 20px;
        }
        .fruit-info img {
            max-width: 100px;
            height: auto;
        }
        .btn{
             background-color:orangered;
             color: white;
             height:40px;
             border-radius: 10px;
        }
    
    </style>
</head>
<body>
    <h2>This is the data to fetch with API's</h2>
    <button class="btn">GET FRUIT INFO</button>
    <div id="fruit-info" class="fruit-info"></div>

    <script>
        document.querySelector('.btn').addEventListener('click', function() {
            this.style.color = 'white';

            async function fetchData() {
                try {
                    const response = await fetch('demo.php');
                    if (!response.ok) {
                        throw new Error('Data does not respond');
                    }
                    const data = await response.json();
                    displayData(data);
                } catch (error) {
                    console.error('No response from server', error);
                }
            }

            function displayData(fruits) {
                const fruitInfoDiv = document.getElementById('fruit-info');
                fruitInfoDiv.innerHTML = ''; // Clear previous data

                fruits.forEach(fruit => {
                    const fruitDiv = document.createElement('div');
                    fruitDiv.innerHTML = `
                        <p><strong>Name:</strong> ${fruit.name}</p>
                        <p><strong>Color:</strong> ${fruit.color}</p>
                        <p><strong>Taste:</strong> ${fruit.taste}</p>
                        ${fruit.image ? `<img src="${fruit.image}" alt="${fruit.name}">` : ''}
                        <hr>
                    `;
                    fruitInfoDiv.appendChild(fruitDiv);
                    console.log(fruit.name);
                    console.log(fruit.color);
                    console.log(fruit.image);
                });
            }

            fetchData();
        });
    </script>
</body>
</html>
