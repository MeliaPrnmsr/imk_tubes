<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Regular Expressions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
			theme: {
				extend: {
					colors: {
						clifford: '#da373d',
					}
				}
			}
		}
    </script>
    <style type="text/tailwindcss"> @layer components
		{
			.title
			{
				@apply text-4xl font-bold text-clifford text-center;
			}
		}
    </style>
</head>

<body>
    <section class="max-w-screen-xl h-full flex flex-col gap-y-20 items-center justify-center mx-auto py-20">
        <div class="relative w-full">
            <input id="regex-input" type="text" name="regex-input" placeholder="RegExp" value=""
                class="relative w-full h-12 px-4 placeholder-transparent transition-all border rounded outline-none focus-visible:outline-none peer border-slate-200 text-slate-500 autofill:bg-white invalid:border-pink-500 invalid:text-pink-500 focus:border-emerald-500 focus:outline-none invalid:focus:border-pink-500 disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400" />
            <label for="regex-input"
                class="cursor-text peer-focus:cursor-default peer-autofill:-top-2 absolute left-2 -top-2 z-[1] px-2 text-xs text-slate-400 transition-all before:absolute before:top-0 before:left-0 before:z-[-1] before:block before:h-full before:w-full before:bg-white before:transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-required:after:text-pink-500 peer-required:after:content-['\00a0*'] peer-invalid:text-pink-500 peer-focus:-top-2 peer-focus:text-xs peer-focus:text-emerald-500 peer-invalid:peer-focus:text-pink-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400 peer-disabled:before:bg-transparent">
                Your email </label>
            <small
                class="absolute flex justify-between w-full px-4 py-1 text-xs transition text-slate-400 peer-invalid:text-pink-500">
                <span id="validation-text" class="hidden">Validation message.</span>
                <span class="text-slate-500">1/10</span>
            </small>
        </div>
    </section>

    <script>
        let regexInput = document.querySelector("#regex-input")
let validationText = document.querySelector("#validation-text")

const REGULAR_EXPRESSION = new RegExp("\\w");

regexInput.addEventListener("input", function() {
    validationText.innerHTML = REGULAR_EXPRESSION.test(regexInput.value) ? "Valid" : "Invalid"
})
    </script>
</body>

</html>