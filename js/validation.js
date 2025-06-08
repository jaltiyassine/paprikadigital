document.addEventListener("DOMContentLoaded", function () {
    const submit = document.getElementById("submit");
    const companyName = document.getElementById("company-name");
    const FullName = document.getElementById("name");
    const email = document.getElementById("email");
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    const phone = document.getElementById("phone");
    const projectType = document.getElementById("project-type");
    const description = document.getElementById("description");
    const budgetMin = document.getElementById("budgetMin");
    const budgetMax = document.getElementById("budgetMax");
    const timeline = document.getElementById("timeline");
    const preferred = document.getElementById("preferred");
    const fileUpload = document.getElementById("file-upload");
    const errorMessages = document.querySelectorAll('.form-err');

    // Global Validator function
    function GlobalValidator() {
        let isValid = true;
        errorMessages.forEach(err => err.style.display = 'none');
        [companyName, FullName, email, description, budgetMin, budgetMax, timeline, fileUpload].forEach(err => err.style.borderColor = '#333');
        
        // Validate Company Name
        if (companyName.value.trim() === "") {
            isValid = false;
            companyName.style.borderColor = "#d9534f";
            companyName.nextElementSibling.style.display = 'block';
        }

        // Validate Full Name
        if (FullName.value.trim() === "") {
            isValid = false;
            FullName.style.borderColor = "#d9534f";
            FullName.nextElementSibling.style.display = 'block';
        }

        // Validate Email
        if (email.value.trim() === "") {
            isValid = false;
            email.style.borderColor = "#d9534f";
            email.nextElementSibling.style.display = 'block';
        } else if (!emailPattern.test(email.value.trim())) {
            isValid = false;
            email.style.borderColor = "#d9534f";
            email.nextElementSibling.nextElementSibling.style.display = 'block';
        }

        // Validate Description
        if (description.value.trim() === "") {
            isValid = false;
            description.style.borderColor = "#d9534f";
            description.nextElementSibling.style.display = 'block';
        }

        // Validate Budget
        if (budgetMin.value.trim() == "" || budgetMax.value.trim() == "") {
            isValid = false;
            budgetMin.style.borderColor = "#d9534f";
            budgetMax.style.borderColor = "#d9534f";
            (budgetMin.parentElement).nextElementSibling.style.display = 'block';
        } else {
            const min = Number(budgetMin.value);
            const max = Number(budgetMax.value);

            if (min >= max) {
                isValid = false;
                budgetMax.style.borderColor = "#d9534f";
                ((budgetMin.parentElement).nextElementSibling).nextElementSibling.style.display = 'block';
            }
        }

        // Validate Timeline
        if (timeline.value.trim() === "") {
            isValid = false;
            timeline.style.borderColor = "#d9534f";
            timeline.nextElementSibling.style.display = 'block';
        }

        // Validate File Upload
        const validExtensions = ['.jpg', '.jpeg', '.png', '.gif', '.pdf', '.txt', '.doc', '.docx'];

        if (fileUpload.files.length > 0) {
            let totalSize = 0;
            for (let i = 0; i < fileUpload.files.length; i++) {
                const file = fileUpload.files[i];
                totalSize += file.size;

                const fileExtension = file.name.slice(((file.name.lastIndexOf(".") - 1) >>> 0) + 2).toLowerCase();
                if (!validExtensions.includes('.' + fileExtension)) {
                    isValid = false;
                    fileUpload.style.borderColor = "#d9534f";
                    (fileUpload.nextElementSibling).nextElementSibling.style.display = 'block';
                    break;
                }
            }

            if (totalSize > 10485760) {
                isValid = false;
                fileUpload.style.borderColor = "#d9534f";
                fileUpload.nextElementSibling.style.display = 'block';
            }
        }

        return isValid;
    }

    // click event
    function handleSubmitClick() {
        const isValid = GlobalValidator();

        if (isValid) {
            submit.removeEventListener('click', handleSubmitClick);
            submit.innerHTML = '<span class="loader-submit"></span>';

            const query = new FormData();
            query.append("companyName", companyName.value);
            query.append("FullName", FullName.value);
            query.append("email", email.value);
            query.append("phone", phone.value);
            query.append("projectType", projectType.value);
            query.append("description", description.value);
            query.append("budgetMin", budgetMin.value);
            query.append("budgetMax", budgetMax.value);
            query.append("timeline", timeline.value);
            query.append("preferred", preferred.value);

            // Add file upload
            if (fileUpload.files.length > 0) {
                query.append("fileUpload", fileUpload.files[0]);
            }

            fetch('api/send_request.php', {
                method: 'POST',
                body: query,
            })
            .then(response => response.json())
            .then(data => {
                if(data.success){
                    window.location.href = "/?success=1";
                }else{
                    window.location.href = "/?success=0";
                }
            })
            .catch((error) => {
                window.location.href = "/?success=0";
            });

        } else {
            window.location.href = "#request-form";

            [companyName, FullName, email, description, budgetMin, budgetMax, timeline, fileUpload].forEach(element => {
                element.removeEventListener('input', GlobalValidator);
            });

            [companyName, FullName, email, description, budgetMin, budgetMax, timeline, fileUpload].forEach(element => {
                element.addEventListener('input', GlobalValidator);
            });
        }
    }

    // Attach the event listener to submit
    submit.addEventListener("click", handleSubmitClick);
});