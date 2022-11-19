export default async (formref) => {
    let ok = false
    await formref.value?.validate(
        (errors) => {
            if (!errors) {
                ok = true
            }
        }
    )
    return ok
}