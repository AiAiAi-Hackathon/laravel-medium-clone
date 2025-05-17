import os
from llama_index.readers.code import CodeReader
from llama_index.readers.file import SimpleDirectoryReader

file_extractor = {
    ".php": CodeReader(),
    ".js": CodeReader(),
    ".md": CodeReader()
}

reader = SimpleDirectoryReader(
    input_dir="./",
    file_extractor=file_extractor
)
documents = reader.load_data()

for doc in documents:
    print(f"ID: {doc.id_}")
    print(f"Contenido:\n{doc.text[:500]}") 
    print("-" * 80)