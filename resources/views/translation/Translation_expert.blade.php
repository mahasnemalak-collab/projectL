<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Word Quiz</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Navbar (optional) -->
  <x-navbar></x-navbar>

  <!-- Laravel flash message (optional) -->
  @if (session('transthree'))
    <div class="flex justify-center mt-4">
      <div class="bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
        {{ session('transthree') }}
      </div>
    </div>
  @endif

  <!-- Quiz Container -->
  <div class="flex items-center justify-center min-h-screen bg-[url('{{ asset('img/Translation_expert.jpg') }}')] bg-cover bg-center">
    <div class="w-1/2 p-8 bg-white shadow-lg rounded-lg text-center">

      <!-- Word Display -->
      <div id="word" class="text-3xl font-bold mb-6">Loading...</div>

      <!-- Quiz Form -->
      <form id="quizForm" action="/test/translation/Translation_expert/post" method="POST" onsubmit="return checkAnswer()">
        @csrf

        <label for="optionSelect" class="block text-lg font-semibold mb-2">
          What is the meaning of this word?
        </label>

        <select id="optionSelect" class="w-full border p-2 rounded mb-4">
          <!-- JS will populate options -->
        </select>

        <!-- Hidden Inputs -->
        <input type="hidden" name="selected_option" id="selectedOptionInput" />
        <input type="hidden" name="correct_answer" id="correctAnswerInput" />
        <input type="hidden" name="word" id="wordInput" />
        <input type="hidden" name="is_correct" id="isCorrectInput" />

        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
          Submit
        </button>
      </form>

    </div>
  </div>

  <!-- JavaScript -->
  <script>
   const questions = [
    {
        word: "Bright red ripe apple",
        options: ["تفاحة حمراء ناضجة مشرقة", "برتقالة صفراء طازجة حلوة", "موزة خضراء صغيرة ناضجة", "ليمون أصفر حامض كبير"],
        correct: "تفاحة حمراء ناضجة مشرقة"
    },
    {
        word: "Sweet juicy fresh orange",
        options: ["برتقالة حلوة طازجة عصيرية", "تفاحة خضراء صغيرة ناضجة", "موزة صفراء كبيرة طازجة", "عنب أحمر طازج حلو"],
        correct: "برتقالة حلوة طازجة عصيرية"
    },
    {
        word: "Sour fresh green lemon",
        options: ["ليمون أخضر طازج حامض", "تفاحة حمراء قديمة حلوة", "خوخ ناضج أصفر كبير", "مشمش صغير طازج جيد"],
        correct: "ليمون أخضر طازج حامض"
    },
    {
        word: "Long fresh green cucumber",
        options: ["خيار أخضر طازج طويل", "فلفل أحمر حار صغير", "كوسة صفراء صغيرة كبيرة", "بطاطس بيضاء ناعمة طازجة"],
        correct: "خيار أخضر طازج طويل"
    },
    {
        word: "Ripe sweet yellow banana",
        options: ["موز أصفر ناضج حلو", "تفاح أخضر طازج صغير", "خوخ ناضج أحمر كبير", "تين طازج أصفر كبير"],
        correct: "موز أصفر ناضج حلو"
    }
   ];



    const question = questions[Math.floor(Math.random() * questions.length)];

    // DOM Elements
    const wordDisplay = document.getElementById("word");
    const select = document.getElementById("optionSelect");
    const selectedInput = document.getElementById("selectedOptionInput");
    const correctInput = document.getElementById("correctAnswerInput");
    const wordInput = document.getElementById("wordInput");
    const isCorrectInput = document.getElementById("isCorrectInput");

    // Set word and correct answer
    wordDisplay.textContent = question.word;
    correctInput.value = question.correct;
    wordInput.value = question.word;

    // Populate options
    question.options.forEach(option => {
      const opt = document.createElement("option");
      opt.value = option;
      opt.textContent = option;
      select.appendChild(opt);
    });

    // Set default selected value
    selectedInput.value = select.value;

    // Update hidden selected input on change
    select.addEventListener("change", () => {
      selectedInput.value = select.value;
    });

    // On form submission: check if answer is correct
    function checkAnswer() {
      const selected = select.value;
      const correct = question.correct;

      selectedInput.value = selected;
      isCorrectInput.value = selected === correct ? "1" : "0";


      return true; // Let the form submit
    }
  </script>

</body>
</html>
