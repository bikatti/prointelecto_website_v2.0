function others(e) {
    let inputAppers  = document.getElementById('encontrarnos').value
    let insertInput = document.getElementById('othersOption')

    if (inputAppers == 'Otros') {
        insertInput.innerHTML = `
            <div class="m-form__group">
                <label>Especifique cómo se entero de nosotros <i class="-required"> *</i></label>
                <input class="-mXsRight -mSmSmBottom" type="text" name="otro" required />
            </div>
        `
    } else {
        insertInput.innerHTML = `<div></div>`
    }
}