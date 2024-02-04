<body>
    <button onclick="getpeople();">people</button>
    <div id="content"></div>
    <script>
        async function getpeople() {
            //basic function style
            try {
                let promise = await fetch("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json ");
                let people_object = await promise.json();
                console.log("success:", people_object);
                let people = people_object.people;
                let contentDiv = document.querySelector("#content");
                for (let item of people) {
                    console.log(item);
                    let newDiv = document.createElement("div");
                    newDiv.innerHTML =
                        "<strong>id: </strong>" +
                        item.id +
                        " | " +
                        "br" +
                        "<strong>Name: </strong>" +
                        item.name +
                        " | " +
                        "br" +
                        "<strong>education: </strong>" +
                        item.education +
                        " | " +
                        
                        "<strong>role: </strong>" +
                        item.role +
                        " | " +
                        "br" +
                        "<strong>email: </strong>" +
                        `<strong>Email: </strong><a href="mailto:${item.email}">${item.email}</a> | ` +
                        " | " +
                        "<strong>phone: </strong>" +
                        item.phone +
                        " | " +
                        `<img src="${item.image}" alt="${item.name}'s Image" style="width: 100px; height: auto; margin-bottom: 1em;"><hr>`;
                    contentDiv.appendChild(newDiv);
                }
            } catch (error) {
                console.log("fail", error);
            }
        }
    </script>
</body>