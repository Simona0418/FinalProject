function renderJobListingsChart(jobListingsData, monthLabels) {
    var ctx = document.getElementById("jobListingsChart").getContext("2d");

    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: monthLabels,
            datasets: [
                {
                    label: "Job Listings",
                    data: jobListingsData,
                    backgroundColor: "rgba(54, 162, 235, 0.2)",
                    borderColor: "rgba(54, 162, 235, 1)",
                    borderWidth: 1,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
}

document.addEventListener("DOMContentLoaded", function () {
    var jobListingsData = JSON.parse(
        document.getElementById("jobListingsData").value
    );
    var monthLabels = JSON.parse(document.getElementById("monthLabels").value);

    renderJobListingsChart(jobListingsData, monthLabels);
});
