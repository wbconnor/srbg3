<template>
  <div>
    <ul>
      <li v-for="project in filteredProjects" :key="project.id">
        <div class="mx-auto bg-white w-1/2 mt-16 p-4 rounded shadow">
          <div class="flex">
            <div class="w-5/6 flex items-center">
                <div class="w-48 h-48 mr-4 mx-auto rounded-lg border shadow bg-cover bg-center" id="image" style="background-image: url('https://www.fanatec.com/image/cache/data/wheels/CSL%20RP1X/CSL-RP1X-Big_03-1000x666.jpg')"></div>
              <div class="flex-1">
                <div class="text-2xl font-bold text-grey-darkest mb-1">{{project.model}}</div>
                <div class="font-normal text-grey-darker text-lg mb-3">{{project.brand.name}}</div>
                <div class="text-sm text-grey-darker leading-normal">{{project.description}}</div>
              </div>
            </div>
            <div class="w-1/6 flex flex-col justify-end items-end">
              <div class="text-grey-dark mb-4">
                <div class="flex items-center mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm2-2.25a8 8 0 0 0 4-2.46V9a2 2 0 0 1-2-2V3.07a7.95 7.95 0 0 0-3-1V3a2 2 0 0 1-2 2v1a2 2 0 0 1-2 2v2h3a2 2 0 0 1 2 2v5.75zm-4 0V15a2 2 0 0 1-2-2v-1h-.5A1.5 1.5 0 0 1 4 10.5V8H2.25A8.01 8.01 0 0 0 8 17.75z"/></svg>
                  <div class="text-xs ml-2 uppercase tracking-wide">{{project.drive.name}}</div>
                </div>
                <div class="flex items-center mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M0 0l6 4 8-4 6 4v16l-6-4-8 4-6-4V0zm7 6v11l6-3V3L7 6z"/></svg>
                  <div class="text-xs ml-2">{{project.diameter}}</div>
                </div>
              </div>
              <div>
                <div v-for="compat in project.compatibility">
                  <div class="bg-blue-light text-white inline-block p-1 rounded text-xs mb-1">{{ compat.name }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  Name: 'example',
  mounted() {
    this.getProjects();
  },
  data() {
    return {
      projects: [],
      search: '',
    };
  },
  methods: {
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
      return projects;
    },
  },
};
</script>
