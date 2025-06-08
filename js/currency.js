fetch('https://get.geojs.io/v1/ip.json')
  .then(response => response.json())
  .then(data => {
    const ip = data.ip;
    fetch(`https://ipapi.co/${ip}/json/`)
      .then(response => response.json())
      .then(geoData => {
        const currency = geoData.currency;
        const country = geoData.country;
        console.log(`Currency Code: ${currency}, Country: ${country}`);

        // const currencySymbols = {
        //   USD: '$',
        //   EUR: '€',
        //   GBP: '£',
        //   JPY: '¥',
        // };

      })
      .catch(err => console.error('Error fetching geo data:', err));
  })
  .catch(err => console.error('Error fetching IP data:', err));