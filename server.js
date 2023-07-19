const express = require('express');
const app = express();
const PORT = 5503; // Change this to the desired port number

app.use(express.static('public'));

app.get('/', (req, res) => {
  res.send('Hello, world!');
});

app.listen(PORT, () => {
  console.log(`Server is listening on port ${PORT}`);
});
