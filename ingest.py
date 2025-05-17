from llama_cloud_services import LlamaParse
import os
from dotenv import load_dotenv

load_dotenv()
LLAMA_INDEX_API_KEY = os.getenv("LLAMA_INDEX_API_KEY")

parser = LlamaParse(
    api_key = LLAMA_INDEX_API_KEY,
)

result = parser.parse("README.md.txt")   
print(result)
