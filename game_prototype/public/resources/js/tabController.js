var activeTab;
var selectedTab;

function initialize () {
    activeTab = document.getElementById('principal');
    activeTab.style.display = "block";
    
    life = document.getElementById('life');
    mana = document.getElementById('mana');
}

function openTab (tab) {
    activeTab.style.display = "none";
    selectedTab = document.getElementById(tab);

    selectedTab.style.display = "block";
    activeTab = selectedTab;
}