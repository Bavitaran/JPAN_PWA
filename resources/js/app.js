require('./bootstrap')

import { createApp } from 'vue'
import LeftMenu from './components/LeftMenu'
import MultiBarChart from './components/MultiBarChart'
import PieChart from './components/PieChart'
import LineChart from './components/LineChart'
import BarChart from './components/BarChart'

const app = createApp({})

app.component('left-menu', LeftMenu)
app.component('multi-bar-chart', MultiBarChart)
app.component('pie-chart', PieChart)
app.component('line-chart', LineChart)
app.component('bar-chart', BarChart)

app.mount('#app')