export function new_application() {
    window.location.href = "new_application.php"
}

export async function disp_cards(filename) {
    try {
        const response = await fetch(filename);
        if (!response.ok) throw new Error("failed to fetch data");

        const data = await response.json();
        const card_container = document.getElementById("applications_container");

        data.forEach(item => {
            const card = document.createElement("div");
            card.classList.add("application_info");

            card.innerHTML = `
                <p class='app_child'>${item.position}</p>
                <p class='app_child'>${item.company}</p>
                <p class='app_child'>${item.job_type}</p>
                <p class='app_child'>${item.submission_date}</p>
                <p class='app_child'>${item.app_status}</p>
            `;

            card_container.appendChild(card);
        })
    } catch (error) {
        console.error("Error fetching and displaying cards: ", error);
    }
}