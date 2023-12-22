<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pure Mathematics</title>
        <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
        <script src="script.js" defer></script>
        <!--MathJax for latex writing-->
        <script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML">

        </script>
    </head>
    <body class="grid-container">
        <header>
            <p style="font-style:italic; font-family: Arial, Helvetica, sans-serif; color: ghostwhite;">Welcome in the pure mathworld</p>
            <button id="dark-mode-toggle">Revert Color</button>
        </header>
        
        <nav>
            <ul>
                <li><a href="#conscept">Basic Conscept</a></li>
                <li><a href="#formula">Mathematics Formulas</a></li>
                <li><a href="#problem">Mathematical Problems</a></li>
                <li><a href="#example">Example</a></li>
                
            </ul>
        </nav>

        <section id="conscept" class="grid-container">
            <h2>Basic Concept</h2>
            <p>Pure mathematics is the study of mathematical concepts independently of any application outside mathematics. These concepts may originate in real-world concerns, and the results obtained may later turn out to be useful for practical applications, but pure mathematicians are not primarily motivated by such applications. Instead, the appeal is attributed to the intellectual challenge and aesthetic beauty of working out the logical consequences of basic principles.</p>
        </section>

        <section id="formula" class="grid-container">
            <h2>Mathematics Formula</h2>
            <div class="formulacontain">
                <p>In this part, this is an formulas that is quite useful in pure mathematics</p>
                <ul>
                    <li>Euclidean Norm : \(r =  \sqrt{(x_2-x_1)^2 + (y_2-y_1)^2 + \ldots + (z_2-z_1)^2}\)</li><br>
                    <li>Binomial Theorem : \((x+y)^n = \sum_{k=0}^{n} {n \choose k} a^{n-k} b^k\)</li><br>
                    <li>Transformation Fourier : \(\hat{f}(\xi) = \int_{-\infty}^{\infty} f(x)\, e^{-2\pi i x \xi}\, dx\) </li><br>
                    <li>Fermat Last Theorem : \(x^n + y^n = z^n \) </li><br>
                    <li>Taylor Series : \(\sum_{n=0}^{\infty} \frac{f^{(n)}(a)}{n!} (x-a)^n\)</li>
                </ul>
            </div>
        </section>

        <section id="problem" class="grid-container">
            <h2>Mathematical Problems</h2>
            <p>Many mathematical problems have been stated but not yet solved. These problems come from many areas of mathematics, such as theoretical physics, computer science, algebra, analysis, combinatorics, algebraic, differential, discrete and Euclidean geometries, graph theory, group theory, model theory, number theory, set theory, Ramsey theory, dynamical systems, and partial differential equations. Some problems belong to more than one discipline and are studied using techniques from different areas. Prizes are often awarded for the solution to a long-standing problem, and some lists of unsolved problems, such as the Millennium Prize Problems, receive considerable attention.</p>
            <p>A mathematical problem is a problem that can be represented, analyzed, and possibly solved, with the methods of mathematics. This can be a real-world problem, such as computing the orbits of the planets in the solar system, or a problem of a more abstract nature, such as Hilbert's problems. It can also be a problem referring to the nature of mathematics itself, such as Russell's Paradox.</p>
            <p>here's the lists :</p>
            <ul id="mathproblem">
                <li>Riemann Hypothesis</li>
                <p>The Riemann zeta function ζ(s) is a function whose arguments may be any complex number other than 1, and whose values are also complex. Its analytical continuation has zeros at the negative even integers; that is, ζ(s) = 0 when s is one of −2, −4, −6, .... These are called its trivial zeros. However, the negative even integers are not the only values for which the zeta function is zero. The other ones are called nontrivial zeros. </p>
                <p>The Riemann hypothesis is concerned with the locations of these nontrivial zeros, and states that:</p>
                <div class="formulacontain">
                    <p style="align-content: center;"><i>The real part of every nontrivial zero of the Riemann zeta function is 1/2.</i></p>
                </div>
                <p>the formula are :</p>
                <div class="formulacontain">
                    <p style="align-self: center;"> \(\sum_{n=1}^{\infty} \frac{1}{n^s} = \frac{1}{1^s} + \frac{1}{2^s} + \frac{1}{3^s} + \ldots \) </p>
                </div>
                <p>here's the graph for the riemann functions:</p>
                <img src="/image/maxresdefault.jpg" alt="error" style="height: 170px; width: 270px;"><br>

                <li>Navier-Stokes Problems</li>
                <p>In mathematics, the Navier–Stokes equations are a system of nonlinear partial differential equations for abstract vector fields of any size. In physics and engineering, they are a system of equations that model the motion of liquids or non-rarefied gases (in which the mean free path is short enough so that it can be thought of as a continuum mean instead of a collection of particles) using continuum mechanics. The equations are a statement of Newton's second law, with the forces modeled according to those in a viscous Newtonian fluid—as the sum of contributions by pressure, viscous stress and an external body force. The Navier–Stokes existence and smoothness problem concerns the mathematical properties of solutions to the Navier–Stokes equations, a system of partial differential equations that describe the motion of a fluid in space. Solutions to the Navier–Stokes equations are used in many practical applications.</p>
                <p>Here's the Navier-Stokes Equation are seen below :</p>
                <div class="formulacontain">
                    <p style="align-content: center;">a). \(\nabla\cdot \overrightarrow{\rm V} = 0 \) </p>
                    <p style="align-content: center;">b). \(\rho\frac{D\textbf{v}}{Dt}=-\nabla p + \rho\textbf{g} + \mu\nabla^2\textbf{v}\)</p>
                </div>
                <p>Where a is an <i>continuation equations</i> and b are the <i>momentum equations</i>.</p>
                <p> However, theoretical understanding of the solutions to these equations is incomplete. In particular, solutions of the Navier–Stokes equations often include turbulence, which remains one of the greatest unsolved problems in physics, despite its immense importance in science and engineering.</p>
                <img src="/image/o.jpg" alt=":)" style="height: 170px ; width: 270px;">
            </ul>
        </section>
        <section id="example" class="grid-container">
            <h2>Example</h2>
            <form id="example-form">
                <p>Determine for Euclidean Norm when \(x_1 = (4,3) \land x_2 = (1,2)\) (in decimal form) </p>
                <label for="example-input">Answers</label>
                <input type="text" name="example-input" id="example-input" required>
                <button type="submit">Submit</button>
            </form>
            <div id="solution"></div>
        </section>

        <section id="form" class="grid-container">
            <h2>Quiz</h2>
            <form id="section-quiz" action="{{url('section.php')}}" method="post">
                <p>What is the derivative of \(\sin(t)\)?</p>
                <label for="quiz-input">Your Answer</label>
                <input type="text" name="quiz-input" id="quiz-input" required>
                <button type="submit">Submit</button>
            </form>
           
        </section>
        <footer>
            <p style="color: antiquewhite;"><i>created by myself</i></p>
        </footer>
        <script>
            document.addEventListener('DOMContentLoaded', function()
            {
                //fitur smooth scrolling
                document.querySelectorAll('a[href^="#"]').forEach(anchor =>{
                    anchor.addEventListener('click', function(e){
                        e.preventDefault()
                        document.querySelector(this.getAttribute('href')).scrollIntoView({
                            behavior: 'smooth'
                        })
                    })
                })

            // dark toggle
            const body = document.body
            const darkmode = document.getElementById('dark-mode-toggle')

            darkmode.addEventListener('click', function(){
                body.classList.toggle('dark-mode')
                localStorage.setItem('darkMode', body.classList.contains('dark-mode'))
            })

            if(localStorage.getItem('darkMode') === 'true'){
                body.classList.add('dark-mode')
            }
            // checking answers from users
            const form = document.getElementById('example-form')
            const solution = document.getElementById('solution')
            form.addEventListener('submit', function(e){
                e.preventDefault()
                const input = document.getElementById('example-input')
                const userans = input.value.trim()
                if (checkans(userans)) 
                {
                    alert('Yup you have the correct answers!')
                }
                else
                {
                    alert('Incorrect')
                    stepssol()
                }
            })

            // real solution
            function checkans(userans)
            {
                return userans === '3.16'
            }

            // step by step solution
            function stepssol()
            {
                solution.parentNode.removeChild(solution)

                const newsolution = document.createElement('div')
                newsolution.id = 'solution'

                form.parentNode.insertBefore(newsolution,form.nextSibling)
                newsolution.innerHTML = `
                <h2>Solution Steps:</h2>
                <ol>
                    <li>using euclidean norm formula where \\(r = \\sqrt{(x_2-x_1)^2 + (y_2-y_1)^2 + \\ldots + (z_2-z_1)^2}\\) </li>
                    <li>plug in the value becomes \\(r = \\sqrt{(1-4)^2 + (2-3)^2}\\) </li>
                    <li>calculate above and the solution are \\(r = \\sqrt{10} \\approx 3.16228\\)</li>
                </ol>`;
                //rendering the latex formula
                if(window.MathJax)
                {
                    MathJax.Hub.Queue(["Typeset", MathJax.Hub, newsolution], function(){
                        console.log(newsolution.innerHTML)
                    });
                }
            }

            // Array of additional mathematical problems
            const additionalMathProblems = [
                {
                    name: "Birch and Swinnerton-Dyer Conjecture",
                    description: "A conjecture about the relationship between the number of rational points on an elliptic curve and the behavior of its L-series."
                },
                {
                    name: "Poincaré Conjecture",
                    description: "A theorem in topology, stating that every simply connected, closed, 3-dimensional manifold is homeomorphic to a 3-dimensional sphere."
                }
            ];
            // Function to populate the list with additional problems
            function populateMathProblems() {
                const problemsList = document.getElementById('mathproblem');
                additionalMathProblems.forEach(problem => {
                    const listItem = document.createElement('li');
                    const problemText = document.createElement('p');
                    problemText.textContent = `${problem.name}: ${problem.description}`;
                    listItem.appendChild(problemText);
                    problemsList.appendChild(listItem);
                });
            }


            // Call the function to populate the list
            populateMathProblems();

            const formquiz = document.getElementById('section-quiz')

            section-quiz.addEventListener('submit',function(e){
                e.preventDefault()
                const input = document.getElementById('quiz-input')
                const userans = input.value.trim()

                section-quiz.submit()
            })
            })
        </script>
    </body>
</html>