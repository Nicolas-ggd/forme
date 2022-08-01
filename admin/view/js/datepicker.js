// datapicker calendar
window.onload = function(){
    $(document).ready(function (){
        let calendar = new dhx.Calendar(null, {dateFormat: "%Y-%m-%d"});
        let popup = new dhx.Popup();

        popup.attach(calendar);
        let dateInput = document.getElementById("date-input");

        dateInput.addEventListener("click", function() {
            popup.show(dateInput);
        });

        calendar.events.on("change", function() {
            dateInput.value = calendar.getValue();
            popup.hide();
        });
    });
};

