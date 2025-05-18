import os
#from llama_index.core.readers import SimpleDirectoryReader
from llama_cloud_services import LlamaParse

def parse(file_path):
    try:
        data = LlamaParse(result_type="json").load_data(file_path)
    except Exception as e:
        print(f"Error parsing {file_path}: {e}")
        data = []
    return data

all_dirs = ["."]

excluded_dirs = [".pylibs", ".git"]

included_extensions = [".md", ".php", ".js"]

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
    for entry in os.listdir(d):
        if entry.endswith(tuple(included_extensions)):
            full_path = os.path.join(d, entry)
            new_full_path = full_path + ".txt"
            os.rename(full_path, new_full_path)
            print(f"Renamed {full_path} to {new_full_path}")
            try:
                #documents = SimpleDirectoryReader(d).load_data()
                doc = parse(new_full_path)
            except Exception as e:
                print(f"{e}")
                continue
            print(f"ID: {doc.id_}")
            print(f"Text: {doc.text[:50]}")

