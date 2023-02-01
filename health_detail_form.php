<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits | Health Details</title>

    <link rel="stylesheet" href="css/health_details.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php include 'navbar.php' ?>

    <div class="content">
        <!-- <div id="addDocumentPopup">

            <div class="popup">
                <h2>Add Document</h2>

                <button id="fileUpload"><span><svg width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <path
                                d="M1.0625 11.3333H5.3125V17H11.6875V11.3333H15.9375L8.5 3.77778L1.0625 11.3333ZM17 1.88889L0 1.88889V0L17 0V1.88889Z"
                                fill="#9A5EF5" />
                        </svg></span> Upload File</button>

                <div class="option-box">
                    <button id="cancel">Cancel</button>
                    <button id="save">Save</button>
                </div>
            </div>

        </div> -->

        <div id="addDocumentPopup">

            <h2>Add Document</h2>

            <button id="fileUpload"><span><svg width="17" height="17" viewBox="0 0 17 17" fill="none">
                        <path
                            d="M1.0625 11.3333H5.3125V17H11.6875V11.3333H15.9375L8.5 3.77778L1.0625 11.3333ZM17 1.88889L0 1.88889V0L17 0V1.88889Z"
                            fill="#9A5EF5" />
                    </svg></span> Upload File</button>

            <div class="option-box">
                <button id="cancel">Cancel</button>
                <button id="save">Save</button>
            </div>

        </div>

        <div class="heading-box">
            <h1>Health Details Form and Documents</h1>
            <button data-btn="edit">Edit</button>
        </div>

        <div class="health-form-container">
            <div class="title-options-container">
                <h3 id="healthFormDetails" onclick="formContent(1)">Health Details Form</h3>
                <h3 id="healthDocument" onclick="formContent(2)">Health Details Documents</h3>
                <div class="border-bottom left"></div>
            </div>

            <div id="form-details">

                <div class="details">
                    <p id="question">What is your Name ?</p>
                    <p id="answer">Ronald Richard</p>
                </div>

                <div class="details">
                    <p id="question">What is your Name ?</p>
                    <p id="answer">Ronald Richard</p>
                </div>

                <div class="details">
                    <p id="question">What is your Name ?</p>
                    <p id="answer">Ronald Richard</p>
                </div>

                <div class="details">
                    <p id="question">What is your Name ?</p>
                    <p id="answer">Ronald Richard</p>
                </div>

            </div>

            <div id="form-documents">

                <div class="details">
                    <div class="title">
                        <img src="icons/pdf.svg" alt="PDF">
                        <div class="info-box">
                            <p class="name">Diabetes Report</p>
                            <div class="minor-details">
                                <span>11 Aug,2022</span>
                                <span>2.6MB</span>
                            </div>
                        </div>
                    </div>
                    <div class="options">
                        <img src="icons/download.svg" alt="Download" title="Download">
                        <img src="icons/share.svg" alt="Share" title="Share">
                        <img src="icons/delete.svg" alt="Delete" title="Delete">
                    </div>
                </div>

                <div class="details">
                    <div class="title">
                        <img src="icons/pdf.svg" alt="PDF">
                        <div class="info-box">
                            <p class="name">Diabetes Report</p>
                            <div class="minor-details">
                                <span>11 Aug,2022</span>
                                <span>2.6MB</span>
                            </div>
                        </div>
                    </div>
                    <div class="options">
                        <img src="icons/download.svg" alt="Download" title="Download">
                        <img src="icons/share.svg" alt="Share" title="Share">
                        <img src="icons/delete.svg" alt="Delete" title="Delete">
                    </div>
                </div>

                <div class="details">
                    <div class="title">
                        <img src="icons/pdf.svg" alt="PDF">
                        <div class="info-box">
                            <p class="name">Diabetes Report</p>
                            <div class="minor-details">
                                <span>11 Aug,2022</span>
                                <span>2.6MB</span>
                            </div>
                        </div>
                    </div>
                    <div class="options">
                        <img src="icons/download.svg" alt="Download" title="Download">
                        <img src="icons/share.svg" alt="Share" title="Share">
                        <img src="icons/delete.svg" alt="Delete" title="Delete">
                    </div>
                </div>


                <div class="details">
                    <div class="title">
                        <img src="icons/pdf.svg" alt="PDF">
                        <div class="info-box">
                            <p class="name">Diabetes Report</p>
                            <div class="minor-details">
                                <span>11 Aug,2022</span>
                                <span>2.6MB</span>
                            </div>
                        </div>
                    </div>
                    <div class="options">
                        <img src="icons/download.svg" alt="Download" title="Download">
                        <img src="icons/share.svg" alt="Share" title="Share">
                        <img src="icons/delete.svg" alt="Delete" title="Delete">
                    </div>
                </div>

                <div class="details">
                    <div class="title">
                        <img src="icons/pdf.svg" alt="PDF">
                        <div class="info-box">
                            <p class="name">Diabetes Report</p>
                            <div class="minor-details">
                                <span>11 Aug,2022</span>
                                <span>2.6MB</span>
                            </div>
                        </div>
                    </div>
                    <div class="options">
                        <img src="icons/download.svg" alt="Download" title="Download">
                        <img src="icons/share.svg" alt="Share" title="Share">
                        <img src="icons/delete.svg" alt="Delete" title="Delete">
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script>
        const formDetails = document.querySelector("#form-details");
        const formDocuments = document.querySelector("#form-documents");
        const borderBottom = document.querySelector(".border-bottom");
        const btn = document.querySelector("[data-btn");
        let popup = document.querySelector("#addDocumentPopup");

        formDocuments.style.display = "none";

        function formContent(content) {
            if (content === 1) {
                //For Border-Bottom Animation
                borderBottom.classList.add("left");
                borderBottom.classList.remove("right");

                //For showing the content
                formDetails.style.display = "flex";
                formDocuments.style.display = "none";

                //For showing The btn According to Content
                btn.innerHTML = "Edit";
                btn.setAttribute("data-btn", "edit");
            } else if (content === 2) {
                //For Border-Bottom Animation
                borderBottom.classList.add("right");
                borderBottom.classList.remove("left");

                //For showing the content
                formDetails.style.display = "none";
                formDocuments.style.display = "flex";

                //For showing The btn According to Content
                btn.innerHTML = "Add";
                btn.setAttribute("data-btn", "add");

                if (btn.getAttribute("data-btn") === "add") {

                    btn.addEventListener("click", () => {
                        popup.classList.toggle("active");

                        if (popup.classList.contains("active")) {

                            popup.addEventListener("click", () => {
                                popup.classList.remove("active");
                            });
                        }
                    });
                }
            }

            console.log(`================== ${content} ======================`);
            // console.log(formDetails.parentElement);
        }
    </script>

</body>

</html>