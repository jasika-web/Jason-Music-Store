let id_el_list = "#product-list";

function getDataOnEnter(event){
    if (event.keyCode == 13) {
        getData(1);
    }
}

function getData(toPage=1){
    let url = baseUrl+'/api/book';
    if(toPage){
        $('[name="_page"]').val(toPage);
    }
    let payload = {
        '_page': toPage
    };
    $("._filter").each(function() {
        payload[$(this).attr('name')] = $(this).val();
    });
    
    axios.get(url, { params: payload }, apiHeaders)
    .then(function (response) {
        console.log('[DATA] response..', response.data);
        let template = ``;
        // START-- products 
        // Ganti book ke instrument setiap href
        (response.data.products).forEach((item) => {
            template += `   
                <div class="col-lg-3 col-md-4 col-sm-6 instrument-item" data-type="${(item.instrument || '').toLowerCase()}">
                        <div class="single-product-item text-center">

                        <div class="products-images">
                            <a href="/instrument/${item.id}" class="product-thumbnail">
                                <img src="${item.cover}" alt="Product Images" height="300">
                            </a>
                            <div class="product-actions">
                                <a href="/instrument/${item.id}"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a>
                                <a href="#"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a>
                            </div>
                        </div> 
                        <div class="product-content">
                            <h6 class="product-title"> 
                                <a href="/instrument/${item.id}">${item.title}</a>
                            </h6>
                            <small class="text-color-primary">${item.instrument}</small>
                            <div class="product-price">
                                <span class="new-price">Rp ${parseFloat(item.price).toLocaleString()}</span>
                            </div>
                        </div>
                    </div>
                </div>`;

                // mengganti item.book menjadi item.instrument karena tablenya instrument
        });
        $(id_el_list).html(template);
        filterBySelect(); // Apply filter setelah produk di-render

        // END---- products
 
    })
    .catch(function (error) {
        console.log('[ERROR] response..', error);
        if (error.code == "ERR_BAD_REQUEST") {
            Swal.fire({
                position: "top-end",
                icon: "warning",
                title: "Yaah...",
                html: "Produk yang lagi dicari tidak ada nih",
                showConfirmButton: false,
                timer: 5000
            });
        } else {
            Swal.fire({
                icon: 'error',
                width: 600,
                title: "Error",
                html: error.message,
                confirmButtonText: 'Ya',
            });
        }
    });
}

// Function to handle the jump to page event
function jumpToPage(page) {
    getData(page);
}

$(function () {
    getData();
});



function filterBySelect() {
    const selected = document.getElementById("instrumentSelect").value.toLowerCase();
    const items = document.querySelectorAll(".instrument-item");

    items.forEach(item => {
        const type = (item.getAttribute("data-type") || "").toLowerCase();
        item.style.display = (selected === "" || selected === type) ? "" : "none";
    });
}









