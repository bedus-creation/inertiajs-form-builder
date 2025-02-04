import { h } from "vue"
import InputText from "./InputText.vue"
export default {
    name: "Mantra",

    props: {
        data: {},
    },

    setup(props, context) {
        const render = (data) => {
            if (Array.isArray(data)) {
                let returns = []
                for (let i = 0; i < data.length; i++) {
                    returns.push(render(data[i]))
                }

                return returns
            } else {
                if (data.tag === "input") {
                    return h(InputText, {
                        'id': data.id,
                        ...data
                    })
                }
            }
        }

        return () => {
            return render(props.data)
        }
    },
}
