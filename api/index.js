// index.js

const express = require('express');
const app = express();
const PORT = 3000;

// Route GET pour récupérer des informations
app.get('/', (req, res) => {
    res.send('API Node.js dans Docker !');
});

app.listen(PORT, () => {
    console.log(`Serveur démarré sur le port ${PORT}`);
});