
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="//niphaumeenses.net/vignette.min.js"
      data-zone="8579144"
      data-sdk="show_8579144"
    ></script>
     <script src="https://sad.adsgram.ai/js/sad.min.js"></script>
  </head>
  <body>
    <div class="loading-spinner" id="loading-spinner">
      <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
    <nav
      class="d-flex align-items-center justify-content-between p-2 bg-primary text-light"
    >
      <div class="d-flex align-items-center">
        <img
          src="https://placehold.co/50"
          height="50"
          width="50"
          alt="Profile Picture"
          class="rounded-circle me-2 profile-pic"
        />
        <div>
          <h3 class="mb-0 UserName" style="font-size: 1.25rem">UserName</h3>
          <p class="mb-0 user-balance" style="font-size: 1rem; font-weight: bold">$100</p>
        </div>
      </div>
    </nav>
    <main class="pb-5">
      <div id="alert-container" class="mt-4"></div>
      <section
        class="dnone profile-section container p-4 bg-light rounded shadow-sm my-4"
        id="profile"
      >
        <h2 class="text-primary mb-4">User Profile</h2>

        <div class="row">
          <!-- Profile Picture and User Info -->
          <div class="col-md-4 text-center mb-4">
            <img
              src="https://placehold.co/150"
              alt="User Logo"
              class="rounded-circle mb-3 profile-pic"
              style="width: 150px; height: 150px"
            />
            <h3 class="text-primary UserName">UserName</h3>
            <p class="text-secondary"><strong>Username:</strong> <p class="UserUsername">UserUsername</p></p>
            <p class="text-secondary"><strong>Balance:</strong> <p class="user-balance">user-balance</p> </p>
          </div>

          <!-- Earnings and Stats -->
          <div class="col-md-8">
            <div class="row">
              <!-- Total Earnings -->
              <div class="col-md-6 mb-4">
                <div class="card border-success">
                  <div class="card-body">
                    <h5 class="card-title text-success">Total Earnings</h5>
                    <p class="card-text">
                      <span id="totalEarnings" class="lifetime_earning">lifetime_earning</span>
                    </p>
                  </div>
                </div>
              </div>


              <!-- Total Ads Watched -->
              <div class="col-md-6 mb-4">
                <div class="card border-info">
                  <div class="card-body">
                    <h5 class="card-title text-info">Total Ads Watched</h5>
                    <p class="card-text">
                      <strong>Ads:</strong> <span id="totalAdsWatched" class="totalAdsWatched">totalAdsWatched</span>
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>

      <section
        class="withdraw-section container p-4 pb-5 mb-5 bg-light rounded shadow-sm"
        id="withdraw"
        style="min-height: 100vh"
      >
        <!-- Withdraw Section Heading -->
        <h2 class="text-primary mb-4">Withdraw</h2>

        <!-- Balance Display -->
        <div class="text-center mb-4">
          <h3 class="text-secondary">
            <strong>Available Balance:</strong> <p class="user-balance">user-balance</p>
          </h3>
        </div>


    <!-- Include Bootstrap CSS and JS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Withdraw Form -->
    <div class="card border-info mb-4">
        <div class="card-body">
            <h5 class="card-title text-info">Request Withdrawal</h5>
            <form id="withdraw-form">
                <div class="form-group mb-3">
                    <label for="payment-method" class="form-label">Withdrawal Method</label>
                    <select class="form-control" id="payment-method" required>
                        <option value="">Select a method</option>
                                                    <option value="1">Ton</option>
                                                    <option value="2">Baksh</option>
                                            </select>
                </div>
                <div class="form-group mb-3">
                    <label for="withdraw-amount" class="form-label">Amount</label>
                    <input
                        type="number"
                        class="form-control"
                        id="withdraw-amount"
                        placeholder="Enter amount"
                        min="1"
                        required
                    />
                </div>
                <div class="form-group mb-3">
                    <label for="withdraw-address" class="form-label">Withdrawal Address</label>
                    <input
                        type="text"
                        class="form-control"
                        id="withdraw-address"
                        placeholder="Enter wallet address"
                        required
                    />
                </div>
                <button
                    type="button"
                    id="withdraw-button"
                    class="btn btn-primary w-100"
                    onClick="handleWithdraw()"
                >
                    Submit Withdrawal
                </button>
            </form>
        </div>
    </div>

      </section>

      <section
        class="d-none home-section container p-4 bg-light rounded shadow-sm"
        id="home"
        style="height: 1000px"
      >
        <!-- User Info -->
        <div class="text-center mb-4">
          <img
            src="https://placehold.co/100"
            alt="User Logo"
            class="rounded-circle mb-2 profile-pic"
            style="width: 100px; height: 100px"
          />
          <h3 class="text-primary UserName">UserName</h3>
          <p class="text-secondary"><strong>Balance:</strong> <p class="user-balance">$100</p></p>
        </div>

        <!-- Earnings Report -->
        <div class="earn-section">
          <div class="row">
            <div class="col-md-6 mb-4">
              <!-- Today's Tasks & Progress -->
              <div class="card border-primary">
                <div class="card-body">
                  <h5 class="card-title text-primary">Today's Tasks</h5>
                  <p class="card-text mb-1">
                    <strong>Total Tasks:</strong> <span id="taskCount" class="taskCount">taskCount</span>
                  </p>
                  <p class="card-text mb-1">
                    <strong>Completed:</strong>
                    <span id="tasksCompleted" class="tasksCompleted">tasksCompleted</span>
                  </p>
                  <p class="card-text mb-1">
                    <strong>Remaining:</strong>
                    <span id="tasksRemaining" class="tasksRemaining">tasksRemaining</span>
                  </p>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar bg-success"
                      role="progressbar"
                      style="width: 60%"
                      aria-valuenow="60"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    >
                      60% Completed
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings Info -->
            <div class="col-md-6 mb-4">
              <div class="card border-success">
                <div class="card-body">
                  <h5 class="card-title text-success">Earnings</h5>
                  <p class="card-text mb-1">
                    <strong>Today's Earnings:</strong>
                    <span id="todayEarnings" class="today_earning">today_earning</span>
                  </p>
                  <p class="card-text mb-1">
                    <strong>Lifetime Earnings:</strong>
                    <span id="lifetimeEarnings" class="lifetime_earning">lifetime_earning</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section
        class="d-none earn-section container p-4 bg-light rounded shadow-sm"
        id="earn"
        style="height: 100vh"
      >
        <h2 class="text-primary mb-4">Earn</h2>

        <div class="row">
          <!-- Task Count and Progress -->
          <div class="col-md-6 mb-4">
            <div class="card border-primary">
              <div class="card-body">
                <h5 class="card-title text-primary">Today's Tasks</h5>
                <p class="card-text mb-1">
                  <strong>Total Tasks:</strong> <span class="ads-limit-value taskCount" id="taskCount">taskCount</span>
                </p>
                <p class="card-text mb-1">
                  <strong>Completed:</strong>
                  <span id="tasksCompleted" class="tasksCompleted">tasksCompleted</span>
                </p>
                <p class="card-text mb-1">
                  <strong>Remaining:</strong>
                  <span id="tasksRemaining" class="tasksRemaining">tasksRemaining</span>
                </p>
                <!-- Start Task Button -->
                <button id="show-ad" class="btn btn-primary mt-3 w-100">
                  Start Task Monetag
                </button>
                <!--<button id="ad" class="btn btn-primary mt-3 w-100">-->
                <!--  Start Task Adsgram-->
                <!--</button>-->
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer
      class="footer-nav bg-white text-light d-flex justify-content-around align-items-center p-2 fixed-bottom shadow-lg"
    >
      <a
        href="#"
        onclick="showSection('home')"
        class="nav-item text-center text-decoration-none text-primary"
      >
        <img
          src="https://th.bing.com/th/id/R.d4c78c018744a53d7b9bf502ef939e40?rik=5vvMhUTq0TgSEg&pid=ImgRaw&r=0"
          alt="Home Icon"
          class="nav-icon mb-1"
        />
        <p class="mb-0" style="font-size: 0.9rem">Home</p>
      </a>
      <a
        href="#"
        onclick="showSection('earn')"
        class="nav-item text-center text-decoration-none text-primary"
      >
        <img
          src="https://cdn1.iconfinder.com/data/icons/business-charts/512/salary-512.png"
          alt="Earn Icon"
          class="nav-icon mb-1"
        />
        <p class="mb-0" style="font-size: 0.9rem">Earn</p>
      </a>
      <a
        href="#"
        onclick="showSection('withdraw')"
        class="nav-item text-center text-decoration-none text-primary"
      >
        <img
          src="https://icons.veryicon.com/png/o/business/work-circle/withdraw-5.png"
          alt="Withdraw Icon"
          class="nav-icon mb-1"
        />
        <p class="mb-0" style="font-size: 0.9rem">Withdraw</p>
      </a>
      <a
        href="#"
        onclick="showSection('profile')"
        class="nav-item text-center text-decoration-none text-primary"
      >
        <img
          src="https://th.bing.com/th/id/R.19fa7497013a87bd77f7adb96beaf768?rik=144XvMigWWj2bw&riu=http%3a%2f%2fwww.pngall.com%2fwp-content%2fuploads%2f5%2fUser-Profile-PNG-High-Quality-Image.png&ehk=%2bat%2brmqQuJrWL609bAlrUPYgzj%2b%2f7L1ErXRTN6ZyxR0%3d&risl=&pid=ImgRaw&r=0"
          alt="Profile Icon"
          class="nav-icon mb-1"
        />
        <p class="mb-0" style="font-size: 0.9rem">Profile</p>
      </a>
    </footer>
    <style>
      .footer-nav {
        border-top: 2px solid rgba(255, 255, 255, 0.1);
      }

      .nav-icon {
        width: 24px;
        height: 24px;
      }

      .nav-item {
        flex-grow: 1;
        padding: 5px;
      }
    </style>
    <script>
      function showSection(sectionId) {
        const sections = document.querySelectorAll("main > section");

        sections.forEach((section) => {
          if (section.id === sectionId) {
            section.classList.remove("d-none");
          } else {
            section.classList.add("d-none");
          }
        });
      }

      document.addEventListener("DOMContentLoaded", () => {
        showSection("home");
      });
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
      <script>
    document.addEventListener("DOMContentLoaded", function () {

    window.csrfToken = "asimLMoyAzjqpqqhOleBu9iQ2AFKJNOkvgY1HCec";


       
      
        
    const showAdButton = document.getElementById("show-ad");

    function toggleLoading(show) {
        document.getElementById("loading-spinner").style.display = show ? "flex" : "none";
    }

    function showAlert(message, type = "danger") {
        const alertContainer = document.getElementById("alert-container");
        alertContainer.innerHTML = `
            <div class="alert alert-${type} alert-dismissible fade show" role="alert">
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
    }

    function fetchUserData(userData) {
        toggleLoading(true);
        fetch("https://fundfy.jhcreator.com/user/check-or-create", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": window.csrfToken,
            },

            body: JSON.stringify(userData),
        })
        .then(async (response) => {
            toggleLoading(false);
            if (!response.ok) {
                const errorText = await response.text();
                throw new Error(`Failed to fetch user data: ${errorText}`);
            }
            return response.json();
        })
        .then((data) => {
            if (data.success) {
                updateUI(data);
            } else {
                showAlert("Failed to load user data.");
            }
        })
        .catch((error) => showAlert("Error: " + error.message));
    }

    function handleAdReward(userId) {
        toggleLoading(true);
        fetch("https://fundfy.jhcreator.com/user/reward", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN":  window.csrfToken,
            },
            body: JSON.stringify({ telegram_id: userId }),
        })
        .then(async (response) => {
            toggleLoading(false);
            if (!response.ok) {
                const errorText = await response.text();
                throw new Error(`Failed to reward user: ${errorText}`);
            }
            return response.json();
        })
        .then((data) => {
            if (data.success) {
                updateUI(data);
                showAlert("Reward credited successfully!", "success");
            } else {
                showAlert("Failed to reward user.");
            }
        })
        .catch((error) => showAlert("Error: " + error.message));
    }

  function updateUI(data) {
    if (data.user) {
        const user = data.user;

        updateTextContent(".UserUsername", '@' + user.username || "User");
        updateTextContent(".UserName", user.first_name + ' ' + user.last_name || "User");
        updateTextContent(".user-balance", `Taka ${user.balance || "0.00"}`);
        updateTextContent(".tasksCompleted", data.today_ads || "0");
        updateTextContent(".taskCount", data.ads_limit || "0");
        updateTextContent(".today_earning", `Taka ${data.today_earning || "0.00"}`);
        updateTextContent(".totalAdsWatched", data.totalAdsWatched || "0");
        updateTextContent(".lifetime_earning", `Taka ${data.lifetime_earning || "0.00"}`);
        updateTextContent(".tasksRemaining", data.ads_limit - data.today_ads || "0.00");

        // Update progress bar
        const adsLimit = data.ads_limit || 0;
        const todayAds = data.today_ads || 0;
        const completionPercentage = Math.min((todayAds / adsLimit) * 100, 100);

        const progressBar = document.querySelector(".progress-bar");
        if (progressBar) {
            progressBar.style.width = `${completionPercentage}%`;
            progressBar.setAttribute("aria-valuenow", completionPercentage.toFixed(0));
            progressBar.innerText = `${completionPercentage.toFixed(0)}%`;
        }

        // Show or hide the "Show Ad" button based on ad limit
         const showAdButton = document.getElementById("show-ad");
        if (showAdButton) {
            if (data.ads_limit - data.today_ads > 0) {
                showAdButton.classList.remove("d-none");
            } else {
                showAdButton.classList.add("d-none");
            }
        }

        // Update profile picture
        const profilePictureUrl = user.photo_url || "https://img.freepik.com/free-vector/blue-circle-with-white-user_78370-4707.jpg"; 
        document.querySelectorAll(".profile-pic").forEach((img) => {
            img.src = profilePictureUrl;
        });
    } else {
        showAlert("Failed to load user data.");
    }
}


    function updateTextContent(selector, text) {
        document.querySelectorAll(selector).forEach((el) => {
            el.innerText = text;
        });
    }

    let currentUserId;

    if (window.Telegram.WebApp) {
        const user = Telegram.WebApp.initDataUnsafe.user;
        if (user) {
            const userData = {
                first_name: user.first_name,
                last_name: user.last_name,
                username: user.username,
                language_code: user.language_code,
                photo_url: user.photo_url || "https://img.freepik.com/free-vector/blue-circle-with-white-user_78370-4707.jpg",
                is_premium: user.is_premium,
                id: user.id
            };
            
            currentUserId = user.id;
            fetchUserData(userData);

            document.querySelectorAll(".profile-pic").forEach((img) => {
                img.src = userData.photo_url;
            });
        }
    }

  if (showAdButton) {
    showAdButton.addEventListener("click", function () {
        // Disable the button to prevent multiple clicks
        showAdButton.disabled = true;

        show_8579144().then(() => {
            if (currentUserId) {
                handleAdReward(currentUserId).then(() => {
                    // Re-enable the button after handling the reward
                    showAdButton.disabled = false;
                }).catch(error => {
                    // Handle any error that occurs during reward processing
                    console.error("Error handling ad reward:", error);
                    showAlert("There was an error processing your reward.");
                    // Re-enable the button even if there's an error
                    showAdButton.disabled = false;
                });
            } else {
                showAlert("User ID is not available.");
                // Re-enable the button if user ID is not available
                showAdButton.disabled = false;
            }
        }).catch(error => {
            // Handle any error that occurs during show_ function
            console.error("Error showing ad:", error);
            showAlert("There was an error showing the ad.");
            // Re-enable the button in case of an error
            showAdButton.disabled = false;
        });
    });
}

     document.getElementById('withdraw-button').addEventListener('click', handleWithdraw);

    function handleWithdraw() {
        const amount = parseFloat(document.getElementById('withdraw-amount').value);
        const paymentMethodId = document.getElementById('payment-method').value;
        const withdrawAddress = document.getElementById('withdraw-address').value;

        // Check if fields are filled correctly
        if (currentUserId && amount > 0 && paymentMethodId && withdrawAddress) {
            toggleLoading(true);
            fetch("https://fundfy.jhcreator.com/user/withdraw", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": window.csrfToken,
                },

                body: JSON.stringify({ 
                    telegram_id: currentUserId, 
                    amount: amount, 
                    payment_method_id: paymentMethodId, 
                    address: withdrawAddress 
                }),
            })
            .then(async (response) => {
                toggleLoading(false);
                if (!response.ok) {
                    const errorText = await response.text();
                    throw new Error(`Failed to process withdrawal: ${errorText}`);
                }
                return response.json();
            })
            .then((data) => {
                if (data.success) {
                    updateUI(data);
                    showAlert("Withdrawal successful!", "success");
                } else {
                    showAlert(data.message || "Failed to process withdrawal.", "danger");
                }
            })
            .catch((error) => showAlert("Error: " + error.message));
        } else {
            showAlert("Please fill in all fields correctly.");
        }
    }
    
    
});

</script> 

  </body>
</html>