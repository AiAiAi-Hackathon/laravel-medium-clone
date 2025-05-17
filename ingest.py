from llama_cloud_services import LlamaParse
import os
from dotenv import load_dotenv

load_dotenv()
LLAMA_INDEX_API_KEY = os.getenv("LLAMA_INDEX_API_KEY")

parser = LlamaParse(
    api_key = LLAMA_INDEX_API_KEY,
)
allowed_extensions = [
    "txt",
    "json",
    "xml",
]
for root, dirs, files in os.walk("."):
    for filename in files:
        ext = filename.split(".")[-1]
        if ext in allowed_extensions:
            with open(os.path.join(root, filename), "r") as f:
                content = f.read()
                result = parser.parse(content)
                print(result)
