// Quotes
const quotes = [
    "I believe that being ruled by the worst democracy is preferable to being ruled by the best autocracy.",
    "I don't believe that absolute truth is necessary. I only need the power to freely accomplish my dreams. One could say that it's the power not to have to take orders from those one despises.",
    "A nation’s survival isn’t something to be discussed at the level of one individual’s rights.",
    "All heroes have established thrones atop not just their enemies but a large quantity of allied corpses as well. There are no monarchs with clean hands. Their subordinates also know that. I would like you to consider that at times, to grant death is also a way to repay loyalty.",
    "Regardless of the color of eyes or skin, the color of blood is the same for everyone, isn't it?",
    "The right to violate the rights of the people belongs to the people.",
    "Privilege corrupts a man's soul. You instinctively justify yourself while blaming others.",
    "The Alliance should die as a democracy rather than become a dictatorship to survive.",
    "For those who have come to power, wealth and glory not by their own strength and effort, but simply through inheritance, what right do they have to complain? The very existence of such blood-lineage dynasties is disgusting. Power is the property of one generation. It shouldn't be transferred, it should be seized.",
    "Neither terrorism nor occultism have ever impacted history in any constructive way.",
    "So governments can sell out their own people, but the reverse is not allowed?",
    "People may need societies, but they do not necessarily need 'nations'."
];

// Quote authors
const authors = [
    "Yang Wen-li",
    "Reinhard von Lohengramm",
    "João Rebelo",
    "Paul von Oberstein",
    "Oskar von Reuenthal",
    "Yang Wen-li",
    "Willibald Joachim von Merkatz",
    "Alexandre Bewcock",
    "Reinhard von Lohengramm",
    "Yang Wen-li",
    "Walter von Schönkopf",
    "Yang Wen-li"
];

// Random quote function
function getRandomQuote() {
    const randomIndex = Math.floor(Math.random() * quotes.length);
    document.getElementById("quote").innerHTML = `"${quotes[randomIndex]}"`;
    document.getElementById("author").innerHTML = `<strong>- ${authors[randomIndex]}</strong>`;
}

// Run function once on page load
window.onload = getRandomQuote;