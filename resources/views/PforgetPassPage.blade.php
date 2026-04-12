<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Express Medical Lab - Forgot Password</title>
    <style>
      :root {
        --bg-gradient-start: #020617;
        --bg-gradient-mid: #0b2545;
        --bg-gradient-accent: #0f766e;
        --bg-gradient-end: #1e3a8a;
        --primary: #38bdf8;
        --primary-soft: #0ea5e9;
        --accent: #22c1c3;
        --text-main: #e5f2ff;
        --text-muted: #93b1d1;
        --card-bg: rgba(8, 19, 40, 0.92);
        --border-soft: rgba(148, 186, 233, 0.22);
        --error: #fb7185;
        --focus: #38bdf8;
      }

      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      body {
        min-height: 100vh;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
          sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        background: radial-gradient(
              circle at top left,
              rgba(56, 189, 248, 0.18),
              transparent 55%
            ),
          radial-gradient(
              circle at bottom right,
              rgba(45, 212, 191, 0.18),
              transparent 55%
            ),
          linear-gradient(
            135deg,
            var(--bg-gradient-start),
            var(--bg-gradient-mid),
            var(--bg-gradient-accent),
            var(--bg-gradient-end)
          );
        background-size: 180% 180%;
        animation: bgGradient 36s ease-in-out infinite;
        color: var(--text-main);
        overflow: hidden;
      }

      .background-doodles {
        position: fixed;
        inset: 0;
        pointer-events: none;
        overflow: hidden;
        z-index: 0;
      }

      .doodle {
        position: absolute;
        width: 130px;
        height: 130px;
        border-radius: 999px;
        border: 1px solid rgba(148, 186, 233, 0.22);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 46px;
        color: rgba(191, 219, 254, 0.55);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        opacity: 0.6;
        animation: float 26s ease-in-out infinite;
      }

      .doodle--syringe {
        top: 8%;
        left: 9%;
        transform: rotate(-18deg);
        animation-duration: 30s;
      }

      .doodle--tube {
        top: 22%;
        right: 11%;
        animation-duration: 32s;
      }

      .doodle--dna {
        bottom: 10%;
        left: 15%;
        animation-duration: 34s;
      }

      .doodle--scope {
        bottom: 20%;
        right: 19%;
        animation-duration: 38s;
      }

      @keyframes float {
        0% {
          transform: translate3d(0, 0, 0) scale(1);
        }
        50% {
          transform: translate3d(16px, -20px, 0) scale(1.02);
        }
        100% {
          transform: translate3d(0, 0, 0) scale(1);
        }
      }

      @keyframes bgGradient {
        0% {
          background-position: 0% 50%;
        }
        50% {
          background-position: 100% 50%;
        }
        100% {
          background-position: 0% 50%;
        }
      }

      .login-wrapper {
        position: relative;
        z-index: 1;
        padding: 24px;
        width: 100%;
        max-width: 460px;
      }

      .login-card {
        background: var(--card-bg);
        border-radius: 24px;
        padding: 28px 26px 26px;
        box-shadow: 0 28px 80px rgba(3, 7, 18, 0.78);
        border: 1px solid rgba(148, 186, 233, 0.3);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        transform: translateY(18px);
        opacity: 0;
        animation: cardFadeIn 0.9s ease-out forwards;
      }

      @keyframes cardFadeIn {
        0% {
          opacity: 0;
          transform: translateY(18px) scale(0.98);
        }
        100% {
          opacity: 1;
          transform: translateY(0) scale(1);
        }
      }

      .brand {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 18px;
      }

      .brand-logo {
        width: 44px;
        height: 44px;
        border-radius: 18px;
        background: radial-gradient(circle at 30% 10%, #1e293b, #020617);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 12px 32px rgba(15, 23, 42, 0.9);
      }

      .logo-icon {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: conic-gradient(
          from 210deg,
          #1e88e5,
          #00b8a9,
          #4fb3f6,
          #1e88e5
        );
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .logo-icon::before,
      .logo-icon::after {
        content: "";
        position: absolute;
        background: #ffffff;
        border-radius: 999px;
      }

      .logo-icon::before {
        width: 60%;
        height: 18%;
      }

      .logo-icon::after {
        width: 18%;
        height: 60%;
      }

      .brand-text {
        display: flex;
        flex-direction: column;
        gap: 2px;
      }

      .brand-title {
        font-size: 1.2rem;
        font-weight: 700;
        letter-spacing: 0.02em;
      }

      .brand-subtitle {
        font-size: 0.78rem;
        color: var(--text-muted);
        letter-spacing: 0.06em;
        text-transform: uppercase;
      }

      .headline {
        margin-bottom: 18px;
      }

      .headline h2 {
        font-size: 1.3rem;
        margin-bottom: 4px;
      }

      .headline p {
        font-size: 0.9rem;
        color: var(--text-muted);
      }

      form {
        display: flex;
        flex-direction: column;
        gap: 14px;
      }

      .field {
        display: flex;
        flex-direction: column;
        gap: 6px;
      }

      .field-label {
        font-size: 0.8rem;
        font-weight: 500;
        color: var(--text-main);
      }

      .input-wrapper {
        position: relative;
      }

      .input-icon {
        position: absolute;
        left: 12px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 16px;
        color: rgba(18, 48, 71, 0.32);
        pointer-events: none;
      }

      .input-field {
        width: 100%;
        padding: 10px 12px 10px 36px;
        border-radius: 12px;
        border: 1px solid var(--border-soft);
        background: rgba(255, 255, 255, 0.9);
        outline: none;
        font-size: 0.9rem;
        color: var(--text-main);
        transition: border-color 0.18s ease, box-shadow 0.18s ease,
          background 0.18s ease, transform 0.1s ease;
      }

      .input-field::placeholder {
        color: rgba(107, 123, 140, 0.8);
      }

      .input-field:focus {
        border-color: var(--focus);
        box-shadow: 0 0 0 1px rgba(30, 136, 229, 0.1),
          0 0 0 6px rgba(30, 136, 229, 0.05);
        background: rgba(255, 255, 255, 0.98);
      }

      .input-field.error {
        border-color: var(--error);
        box-shadow: 0 0 0 1px rgba(229, 57, 53, 0.1),
          0 0 0 6px rgba(229, 57, 53, 0.04);
      }

      .error-text {
        margin-top: 2px;
        font-size: 0.78rem;
        color: var(--error);
        min-height: 0.9em;
      }

      .submit-btn {
        margin-top: 6px;
        width: 100%;
        border: none;
        border-radius: 999px;
        padding: 10px 14px;
        font-size: 0.96rem;
        font-weight: 600;
        letter-spacing: 0.02em;
        color: #ffffff;
        background: linear-gradient(135deg, var(--primary), var(--accent));
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        cursor: pointer;
        box-shadow: 0 16px 30px rgba(30, 136, 229, 0.4);
        transform: translateY(0);
        transition: transform 0.11s ease, box-shadow 0.11s ease,
          filter 0.12s ease, background 0.16s ease, opacity 0.16s ease;
      }

      .submit-btn:hover {
        transform: translateY(-1px) scale(1.01);
        box-shadow: 0 18px 34px rgba(30, 136, 229, 0.48);
        filter: brightness(1.03);
      }

      .submit-btn:active {
        transform: translateY(0) scale(0.99);
        box-shadow: 0 10px 20px rgba(30, 136, 229, 0.35);
      }

      .submit-btn span.icon {
        font-size: 1rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
      }

      .submit-btn--secondary {
        margin-top: 10px;
        background: transparent;
        color: var(--primary);
        box-shadow: none;
        border: 1px solid rgba(148, 186, 233, 0.4);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
      }

      .submit-btn--secondary:hover {
        background: rgba(15, 23, 42, 0.7);
        box-shadow: 0 14px 30px rgba(15, 23, 42, 0.7);
      }

      .helper-text {
        margin-top: 12px;
        font-size: 0.78rem;
        color: var(--text-muted);
        text-align: center;
      }

      .helper-text a {
        color: var(--primary);
        text-decoration: none;
        font-weight: 500;
      }

      .helper-text a:hover {
        text-decoration: underline;
      }

      .global-error {
        margin-bottom: 6px;
        padding: 7px 10px;
        border-radius: 10px;
        background: rgba(229, 57, 53, 0.06);
        color: var(--error);
        font-size: 0.8rem;
        display: none;
      }

      .global-error.visible {
        display: block;
      }

      .global-success {
        margin-bottom: 6px;
        padding: 7px 10px;
        border-radius: 10px;
        background: rgba(34, 193, 195, 0.08);
        color: var(--primary-soft);
        font-size: 0.8rem;
        display: none;
      }

      .global-success.visible {
        display: block;
      }

      @media (max-width: 600px) {
        body {
          align-items: stretch;
        }

        .login-wrapper {
          padding: 18px 14px;
          max-width: 100%;
        }

        .login-card {
          padding: 22px 18px 20px;
          border-radius: 18px;
        }

        .brand-title {
          font-size: 1.05rem;
        }

        .headline h2 {
          font-size: 1.1rem;
        }

        .doodle {
          opacity: 0.26;
          transform: scale(0.76);
        }
      }
    </style>
  </head>
  <body>
    <div class="background-doodles" aria-hidden="true">
      <!-- Syringe -->
      <div class="doodle doodle--syringe">
        <svg
          width="70"
          height="70"
          viewBox="0 0 70 70"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <g
            opacity="0.52"
            stroke="currentColor"
            stroke-width="1.4"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path
              d="M20 47L46 21L50 25L24 51C23.2 51.8 22 51.8 21.2 51L20 49.8C19.2 49 19.2 47.8 20 47Z"
            />
            <path d="M45 17L53 25" />
            <path d="M31 33L39 41" />
            <path d="M27 37L35 45" />
            <path d="M18 57L26 49" />
            <path d="M48 18L52 14" />
          </g>
        </svg>
      </div>
      <!-- Test tube -->
      <div class="doodle doodle--tube">
        <svg
          width="70"
          height="70"
          viewBox="0 0 70 70"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <g
            opacity="0.5"
            stroke="currentColor"
            stroke-width="1.4"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path
              d="M27 14H43M30 14V46C30 50 33 53 37 53C41 53 44 50 44 46V14"
            />
            <path
              d="M30 37C32.5 37 33.5 35 36 35C38.5 35 39.5 37 42 37C44.5 37 45.5 35 48 35"
            />
          </g>
        </svg>
      </div>
      <!-- DNA -->
      <div class="doodle doodle--dna">
        <svg
          width="70"
          height="70"
          viewBox="0 0 70 70"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <g
            opacity="0.5"
            stroke="currentColor"
            stroke-width="1.4"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path
              d="M23 17C29 23 41 29 47 35C41 41 29 47 23 53"
            />
            <path
              d="M47 17C41 23 29 29 23 35C29 41 41 47 47 53"
            />
            <path d="M27 21H35" />
            <path d="M35 27H43" />
            <path d="M27 43H35" />
            <path d="M35 49H43" />
          </g>
        </svg>
      </div>
      <!-- Microscope -->
      <div class="doodle doodle--scope">
        <svg
          width="70"
          height="70"
          viewBox="0 0 70 70"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <g
            opacity="0.5"
            stroke="currentColor"
            stroke-width="1.4"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path d="M28 18L34 24" />
            <path d="M32 16L38 22" />
            <path d="M34 24L30 28L38 36L42 32L34 24Z" />
            <path d="M30 28L26 32L30 36L34 32" />
            <path d="M24 44C24 38 30 36 34 36" />
            <path d="M22 48H46" />
            <path d="M24 52H44" />
          </g>
        </svg>
      </div>
    </div>

    <main class="login-wrapper">
      <section class="login-card" aria-labelledby="reset-title">
        <div class="brand">
          <div class="brand-logo">
            <div class="logo-icon" aria-hidden="true"></div>
          </div>
          <div class="brand-text">
            <div class="brand-title">Express Medical Lab</div>
            <div class="brand-subtitle">Secure password recovery</div>
          </div>
        </div>

        <header class="headline">
          <h2 id="reset-title">Forgot Password?</h2>
          <p>
            Enter your email address and we’ll send you a secure link to reset
            your password.
          </p>
        </header>

        <div id="globalError" class="global-error" role="alert"></div>
        <div id="globalSuccess" class="global-success" role="status"></div>

        <form id="resetForm" novalidate>
          <div class="field">
            <label for="email" class="field-label">Email address</label>
            <div class="input-wrapper">
              <span class="input-icon" aria-hidden="true">@</span>
              <input
                id="email"
                name="email"
                type="email"
                class="input-field"
                placeholder="name@example.com"
                autocomplete="email"
                required
              />
            </div>
            <div id="emailError" class="error-text"></div>
          </div>

          <button type="submit" class="submit-btn" id="submitBtn">
            <span id="submitText">Send Reset Link</span>
            <span class="icon" aria-hidden="true">↗</span>
          </button>

          <button
            type="button"
            class="submit-btn submit-btn--secondary"
            id="backToLogin"
          >
            <span><a href="{{ route('patient.remember-pass') }}">Back to Login</a></span>
          </button>
        </form>

        <p class="helper-text">
          Remembered your password?
            <a href="{{ route('patient.remember-pass') }}">Go to the login page</a>
          </p>
      </section>
    </main>

    <script>
      (function () {
        const form = document.getElementById("resetForm");
        const emailInput = document.getElementById("email");
        const emailError = document.getElementById("emailError");
        const globalError = document.getElementById("globalError");
        const globalSuccess = document.getElementById("globalSuccess");
        const submitBtn = document.getElementById("submitBtn");
        const submitText = document.getElementById("submitText");
        const backToLogin = document.getElementById("backToLogin");

        const emailPattern =
          /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        function clearMessages() {
          emailError.textContent = "";
          globalError.textContent = "";
          globalSuccess.textContent = "";
          globalError.classList.remove("visible");
          globalSuccess.classList.remove("visible");
          emailInput.classList.remove("error");
        }

        function setLoading(isLoading) {
          if (isLoading) {
            submitBtn.disabled = true;
            submitBtn.style.opacity = "0.8";
            submitText.textContent = "Sending...";
          } else {
            submitBtn.disabled = false;
            submitBtn.style.opacity = "1";
            submitText.textContent = "Send Reset Link";
          }
        }

        function validate() {
          clearMessages();
          let hasError = false;

          if (!emailInput.value.trim()) {
            emailError.textContent = "Email is required.";
            emailInput.classList.add("error");
            hasError = true;
          } else if (!emailPattern.test(emailInput.value.trim())) {
            emailError.textContent = "Please enter a valid email address.";
            emailInput.classList.add("error");
            hasError = true;
          }

          if (hasError) {
            globalError.textContent =
              "Please fix the highlighted field and try again.";
            globalError.classList.add("visible");
          }

          return !hasError;
        }

        form.addEventListener("submit", function (e) {
          e.preventDefault();
          if (!validate()) return;

          setLoading(true);

          // Simulate async reset link sending
          setTimeout(function () {
            setLoading(false);
            globalSuccess.textContent =
              "Reset link sent! Please check your email.";
            globalSuccess.classList.add("visible");
          }, 1200);
        });

        emailInput.addEventListener("input", function () {
          if (emailInput.classList.contains("error")) {
            validate();
          } else {
            clearMessages();
          }
        });

        backToLogin.addEventListener("click", function () {
          window.location.href = "loginPage.html";
        });
      })();
    </script>
  </body>
</html>

