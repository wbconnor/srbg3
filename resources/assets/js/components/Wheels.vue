<template>
  <div class="projects">
    <div class="tableFilters">
      <input class="input" type="text" v-model="search" placeholder="Search Table">
    </div>
    <datatable :columns="columns" :sortKey="sortKey" :sortOrders="sortOrders" @sort="sortBy">
      <tbody>
        <tr v-for="project in filteredProjects" :key="project.id">
          <td>{{project.brand.name}}</td>
          <td>{{project.model}}</td>
          <td>{{project.description}}</td>
          <td>
            <div v-for="compat in project.compatibility">
              {{ compat.name }} <br>
            </div>
          </td>
          <td>{{project.diameter}}</td>
          <td>{{project.drive.name}}</td>
          <td>{{project.brushless_motor}}</td>
          <td>{{project.rotation}}</td>
          <td>{{project.torque}}</td>
          <td>{{project.resolution}}</td>
        </tr>
      </tbody>
    </datatable>
  </div>
</template>

<script>
import Datatable from './Datatable';

export default {
  Name: 'example',
  components: { datatable: Datatable },
  mounted() {
    this.getProjects();
  },
  data() {
    let sortOrders = {};
    let columns = [
      { width: '10%', label: 'Brand', name: 'brand' },
      { width: '16.5%', label: 'Model', name: 'model' },
      { width: '33%', label: 'Description', name: 'description' },
      { width: '10%', label: 'Compatibility', name: 'compatibility' },
      { width: '10%', label: 'Diameter', name: 'diameter' },
      { width: '10%', label: 'Motor Drive', name: 'drive' },
      { width: '10%', label: 'Brushless Motor', name: 'brushless_motor' },
      { width: '10%', label: 'Rotation', name: 'rotation' },
      { width: '10%', label: 'Torque', name: 'torque' },
      { width: '10%', label: 'Resolution', name: 'resolution' },
    ];
    columns.forEach((column) => {
      sortOrders[column.name] = -1;
    });
    return {
      projects: [],
      columns: columns,
      sortKey: 'brand',
      sortOrders: sortOrders,
      search: '',
      tableData: {},
    };
  },
  methods: {
    // getProjects() {
    //   fetch(new Request('/api/wheels'))
    //   .then(response => response.json())
    //   .then((response) => {
    //     console.log(response);
    //     this.wheels = response;
    //   });
    // },
    getProjects(url = '/api/wheels') {
      axios.get(url, {params: this.tableData})
        .then(response => {
          console.log(response.data);
          this.projects = response.data;
        })
        .catch(errors => {
          console.log(errors);
        });
    },
    sortBy(key) {
      this.sortKey = key;
      this.sortOrders[key] = this.sortOrders[key] * -1;
    },
    getIndex(array, key, value) {
      return array.findIndex(i => i[key] == value)
    },
  },
  computed: {
    filteredProjects() {
      let projects = this.projects;
      if (this.search) {
        projects = projects.filter((row) => {
          return Object.keys(row).some((key) => {
            return String(row[key]).toLowerCase().indexOf(this.search.toLowerCase()) > -1;
          })
        });
      }
      let sortKey = this.sortKey;
      let order = this.sortOrders[sortKey] || 1;
      // if (sortKey) {
      //   projects = projects.slice().sort((a, b) => {
      //     let index = this.getIndex(this.columns, 'name', sortKey);
      //     a = String(a[sortKey]).toLowerCase();
      //     b = String(b[sortKey]).toLowerCase();
      //     if (this.columns[index].type && this.columns[index].type === 'date') {
      //       return (a === b ? 0 : new Date(a).getTime() > new Date(b).getTime() ? 1 : -1) * order;
      //     } else if (this.columns[index].type && this.columns[index].type === 'number') {
      //       return (+a === +b ? 0 : +a > +b ? 1 : -1) * order;
      //     } else {
      //       return (a === b ? 0 : a > b ? 1 : -1) * order;
      //     }
      //   });
      // }
      return projects;
    },
  },
};
</script>
