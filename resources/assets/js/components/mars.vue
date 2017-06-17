<template>
        <div class="row">

            <div class="col-sm-12 col-md-3 col-lg-2">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body fancy">
                        countdown to Mars {{ days }} days
                    </div>
                    <div class="panel-body fancy">
                        registered colonists
                    </div>
                    <div class="panel-footer">
                     {{ test }}
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-9 col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-0 col-lg-2">
                <div class="panel panel-default">
                    <div class="panel-body fancy">
                        Your Profile
                    </div>
                    <div class="panel-body fancy">
                        Your Rank
                    </div>
                </div>
            </div>
        </div>
</template>

<style>

    .home-container {
        position: absolute;
        top: 50%;
        left:50%;
        transform: translate(-50%,-50%);
        border: 1px solid #000000;
        min-height: 70%;
        min-width: 70%;
        background: #000;
        background: rgba(0,0,0,0.50)
    }
</style>

<script>
    export default {
        data() {
            return {
                days: '?',
                test: 'success'
            };
        },
        mounted() {
            console.log('Component mounted.')
        },
        created() {
            axios.get(`/api/days`)
            .then(response => {
            // JSON responses are automatically parsed.
            this.days = response.data
            })
            .catch(e => {
            this.errors.push(e)
            })
        }
    }
    
</script>
