document.getElementById("connectBtn").addEventListener("click", async () => {
    if (typeof window.ethereum !== "undefined") {
      try {
        // Request account access
        const accounts = await window.ethereum.request({
          method: "eth_requestAccounts",
        });
  
        // Display the account address to the user
        document.getElementById("address").innerText = "Connected Address";
        console.log(accounts[0]);
      } catch (error) {
        console.error("User denied account access");
      }
    } else {
      alert("MetaMask is not installed. Please install it and try again.");
    }
  });