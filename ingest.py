import os
from llama_index.core.readers import SimpleDirectoryReader
from llama_cloud_services import LlamaParse

def parse(file_path):
    data = LlamaParse(result_type="json").load_data(file_path)
    return data
    
all_dirs = ["."]

excluded_dirs = [".pylibs", ".git"]

def get_all_dirs(path):
    print(f".......Scanning directory: {path}")
    for entry in os.listdir(path):
        if entry in excluded_dirs:
            continue
        full_path = os.path.join(path, entry)
        if os.path.isdir(full_path):
            all_dirs.append(full_path)
            get_all_dirs(full_path)

get_all_dirs("./")

for d in all_dirs:
    try:
        #documents = SimpleDirectoryReader(d).load_data()
        documents = parse(d)
    except Exception as e:
        print(f"{e}")
        continue
    for doc in documents:
        print(f"Document ID: {doc.id_}")
        print(f"Document text: {doc.text[:50]}")

