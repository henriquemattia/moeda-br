import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-moeda-br', IndexField)
  app.component('detail-moeda-br', DetailField)
  app.component('form-moeda-br', FormField)
})
