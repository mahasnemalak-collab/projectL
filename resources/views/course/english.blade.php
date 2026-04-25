<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn and Give Answers</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <x-navbar></x-navbar>

    <header class="text-center py-8 bg-purple-600 text-white">
        <h1 class="text-3xl font-bold">Learn and Give Answers</h1>
        <p class="text-lg mt-2">Watch, learn, and test your knowledge.</p>
    </header>

    <div class="max-w-screen-xl mx-auto p-10">
        <!-- Video & Quiz Container -->
        <div id="videoQuizContainer">
            <!-- Video 1 -->
            <div class="video-quiz" id="videoQuiz1">
                <div class="flex justify-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ccEpTTZW34g?si=o41DINvKi8wMAiiN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="p-5 bg-gray-100 rounded-md">
                    <h2 class="text-xl font-bold mb-4">Quiz About the Video</h2>
                    <form class="space-y-4">
                        <label class="block text-gray-700">What is the main topic of the video?</label>
                        <input type="text" class="w-full p-2 border rounded-md">
                        <label class="block text-gray-700">How long is the video?</label>
                        <input type="text" class="w-full p-2 border rounded-md">
                        <button class="w-full bg-purple-500 text-white py-2 rounded-md hover:bg-purple-700">
                            Submit Answers
                        </button>
                    </form>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="video-quiz hidden" id="videoQuiz2">
                <div class="flex justify-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ChqnN3cKzXQ?si=S0xPKSIOiv36icUM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="p-5 bg-gray-100 rounded-md">
                    <h2 class="text-xl font-bold mb-4">Quiz About the Video</h2>
                    <form class="space-y-4">
                        <label class="block text-gray-700">What is the key message of the video?</label>
                        <input type="text" class="w-full p-2 border rounded-md">
                        <label class="block text-gray-700">Describe an important scene.</label>
                        <input type="text" class="w-full p-2 border rounded-md">
                        <button class="w-full bg-purple-500 text-white py-2 rounded-md hover:bg-purple-700">
                            Submit Answers
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Next Button -->
        <div class="text-center mt-6">
            <button id="nextButton" class="bg-blue-500 text-white py-2 px-6 rounded-md hover:bg-blue-700">
                Next Video & Quiz
            </button>
        </div>
    </div>

    <script>
        let currentVideoIndex = 0;
        const videoQuizElements = document.querySelectorAll(".video-quiz");
        const nextButton = document.getElementById("nextButton");

        nextButton.addEventListener("click", () => {
            // Hide current video & quiz form
            videoQuizElements[currentVideoIndex].classList.add("hidden");

            // Move to next video
            currentVideoIndex = (currentVideoIndex + 1) % videoQuizElements.length;

            // Show next video & quiz form
            videoQuizElements[currentVideoIndex].classList.remove("hidden");
        });
    </script>
</body>
</html>
