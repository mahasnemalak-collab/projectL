<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-navbar></x-navbar>
    <?php
// Array of main colors with their names
$colors = [
    'red' => '#FF0000',
    'green' => '#00FF00',
    'blue' => '#0000FF',
    'yellow' => '#FFFF00',
    'cyan' => '#00FFFF',
    'magenta' => '#FF00FF',
    'orange' => '#FFA500',
    'purple' => '#800080',
    'pink' => '#FFC0CB',
    'brown' => '#A52A2A'
];

// Function to get a random color from the array
function randomColor($colors) {
    $keys = array_keys($colors);
    $randomKey = $keys[array_rand($keys)];
    return [$randomKey, $colors[$randomKey]]; // Return both the name and the hex code
}

// Generate a random color and its name
list($colorName, $colorHex) = randomColor($colors);
?>

<!-- Use the random color in your HTML with Tailwind CSS -->
<div style="background-color: <?php echo $colorHex; ?>" class="p-4 text-white">
   
</div>

<div class="w-full h-screen bg-gray-100 dark:bg-gray-800">
    <div class="w-full h-full  flex flex-wrap justify-center items-center gap-2">
        
        <div
                    class="w-[20rem] mx-auto flex flex-col gap-2 px-4 border border-gray-300 border-gray-300 rounded-lg bg-white dark:bg-gray-900">
                    <div class="w-full flex justify-center items-center mb-10">
                        <span style="background-color: <?php echo $colorHex; ?>" id="letter" class="text-6xl w-[8rem] h-[8rem] rounded-full outline outline-offset-2 outline-1 outline-white shadow-lg flex justify-center items-center -mt-[4rem]">
                        
                        </span>
                    </div>

                <div class=" w-full h-full text-center flex flex-col gap-4 relative -top-10">
                <h1 class="uppercase text-lg font-semibold dark:text-white">
                    write the color 
                </h1>
                <form action="/test/Language-high-level/high1" method="POST">
                    @csrf
                    <input type="text" name="color" class="bg-gray-100 mb-2">
                    <input type="text" hidden value="{{htmlspecialchars($colorName)}}" name="color2">
                    <button type="submit" class="w-[60%] mx-auto bg-purple-500 text-white rounded-3xl px-4 py-2">submit</button>
                    @if (session('message3'))
                        <div class="alert alert-info">
                            {{ session('message3') }}
                        </div>
                    @endif
                </form>

               </div>

        </div>
   
        
    </div>



<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>