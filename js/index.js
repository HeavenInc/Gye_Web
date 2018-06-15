$(function(){
    window.addEventListener('load', function() {
        if(typeof web3 !== 'undefined') {
            web3 = new Web3(web3.currentProvider);
        } else {
            web3 = new Web3(new Web3.providers.HttpProvider("http://13.124.47.31:8080/"));
        }

        if(!web3.isConnected()) {
            console.error("Not connected");
        }

        web3.version.getNetwork((err, netId) => {
            switch (netId) {
                case "1":
                    $("#network").val("mainnet");
                    console.log('This is mainnet')
                    break
                case "2":
                    $("#network").val("Morden test network");
                    console.log('This is the deprecated Morden test network.')
                    break
                case "3":
                    $("#network").val("ropsten test network");
                    console.log('This is the ropsten test network.')
                    break
                case "4":
                    $("#network").val("Rinkeby test network");
                    console.log('This is the Rinkeby test network.')
                    break
                case "42":
                    $("#network").val("Kovan test network");
                    console.log('This is the Kovan test network.')
                    break
                default:
                    $("#network").val("unknown network");
                    console.log('This is an unknown network.')
            }
        })



        var account = web3.eth.accounts[0];
        var accountInterval = setInterval(function() {
            if (web3.eth.accounts[0] !== account) {
                account = web3.eth.accounts[0];
                $("#account").val(account);
                web3.eth.getBalance(account, function (error, result) {
                    $("#balance").val(result.c[0]/10000+" eth");
                });
            }
        }, 100);
        
  });
});
