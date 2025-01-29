from locust import HttpUser, task, between

class MicroserviceUser(HttpUser):
    wait_time = between(1, 2)

    @task
    def get_home(self):
        self.client.get("/")

    @task
    def post_conversion(self):
        self.client.post("/convert", json={"fahrenheit": 100})