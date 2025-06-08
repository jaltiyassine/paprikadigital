document.addEventListener("DOMContentLoaded", function () {
    const website_buttons = document.getElementsByClassName('website-button');
    const mobile_buttons = document.getElementsByClassName('mobile-button');
    const desktop_buttons = document.getElementsByClassName('desktop-button');

    const preFilled = {
        "website-basic": {
            "projectType": 0,
            "budgetMin": 500,
            "budgetMax": 1000,
        },
        "website-standard": {
            "projectType": 0,
            "budgetMin": 1200,
            "budgetMax": 1700,
        },
        "website-premium": {
            "projectType": 0,
            "budgetMin": 2500,
            "budgetMax": 3000,
        },
    
        "mobile-basic": {
            "projectType": 1,
            "budgetMin": 3000,
            "budgetMax": 3500,
        },
        "mobile-standard": {
            "projectType": 1,
            "budgetMin": 6000,
            "budgetMax": 6500,
        },
        "mobile-premium": {
            "projectType": 1,
            "budgetMin": 10000,
            "budgetMax": 10500,
        },
    
        "desktop-basic": {
            "projectType": 2,
            "budgetMin": 2000,
            "budgetMax": 2500,
        },
        "desktop-standard": {
            "projectType": 2,
            "budgetMin": 5000,
            "budgetMax": 5500,
        },
        "desktop-premium": {
            "projectType": 2,
            "budgetMin": 8000,
            "budgetMax": 8500,
        },
    };
    
    function attachEventListeners(buttons) {
        for (let button of buttons) {
            button.addEventListener('click', (e) => {
                window.location.href = "#section-form";
                const choice = e.target.id;
                document.getElementById("project-type").selectedIndex = preFilled[choice].projectType;
                document.getElementById("budgetMin").value = preFilled[choice].budgetMin;
                document.getElementById("budgetMax").value = preFilled[choice].budgetMax;
            });
        }
    }

    attachEventListeners(website_buttons, 'Website');
    attachEventListeners(mobile_buttons, 'Mobile');
    attachEventListeners(desktop_buttons, 'Desktop');
    document.getElementById("get-custom-website").onclick = () => window.location.href = "#section-form";
});