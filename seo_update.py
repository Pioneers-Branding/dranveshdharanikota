import os
import re

directory = r"c:\Users\GCV\Desktop\Dr Anvesh\services"

mapping = {
    "breast-oncoplastic": "breast-cancer-treatment-hyderabad",
    "esophageal-cancer": "esophageal-cancer-treatment-hyderabad",
    "gastric-cancer": "stomach-gastric-cancer-treatment-hyderabad",
    "colorectal-cancer": "colorectal-cancer-treatment-hyderabad",
    "hpb": "hpb-liver-pancreatic-cancer-treatment-hyderabad",
    "lung-cancer": "lung-cancer-treatment-hyderabad",
    "gynecologic-oncology": "gynecologic-cancer-treatment-hyderabad",
    "head-neck-oncology": "head-neck-cancer-treatment-hyderabad",
    "uro-oncology": "urological-cancer-treatment-hyderabad",
    "musculoskeletal-oncology": "bone-cancer-treatment-hyderabad"
}

seo_data = {
    "breast-cancer-treatment-hyderabad": {
        "title": "Best Breast Cancer Doctor & Surgeon in Hyderabad | Dr. Anvesh",
        "h1": "Breast Cancer Treatment in Hyderabad"
    },
    "esophageal-cancer-treatment-hyderabad": {
        "title": "Esophageal Cancer Specialist & Surgeon in Hyderabad | Dr. Anvesh",
        "h1": "Esophageal Cancer Treatment in Hyderabad"
    },
    "stomach-gastric-cancer-treatment-hyderabad": {
        "title": "Stomach & Gastric Cancer Specialist in Hyderabad | Dr. Anvesh",
        "h1": "Stomach Cancer Treatment in Hyderabad"
    },
    "colorectal-cancer-treatment-hyderabad": {
        "title": "Colorectal Cancer Specialist & Surgeon in Hyderabad | Dr. Anvesh",
        "h1": "Colorectal Cancer Treatment in Hyderabad"
    },
    "hpb-liver-pancreatic-cancer-treatment-hyderabad": {
        "title": "HPB, Liver & Pancreatic Cancer Treatment in Hyderabad | Dr. Anvesh",
        "h1": "HPB Cancer Treatment in Hyderabad"
    },
    "lung-cancer-treatment-hyderabad": {
        "title": "Best Lung Cancer Specialist & Treatment in Hyderabad | Dr. Anvesh",
        "h1": "Lung Cancer Treatment in Hyderabad"
    },
    "gynecologic-cancer-treatment-hyderabad": {
        "title": "Best Gynecologic Oncologist & Treatment in Hyderabad | Dr. Anvesh",
        "h1": "Gynecologic Cancer Treatment in Hyderabad"
    },
    "head-neck-cancer-treatment-hyderabad": {
        "title": "Head & Neck Cancer Specialist & Surgery in Hyderabad | Dr. Anvesh",
        "h1": "Head and Neck Cancer Treatment in Hyderabad"
    },
    "urological-cancer-treatment-hyderabad": {
        "title": "Urological Cancer Specialist & Surgery in Hyderabad | Dr. Anvesh",
        "h1": "Uro-Oncology Treatment in Hyderabad"
    },
    "bone-cancer-treatment-hyderabad": {
        "title": "Best Bone Cancer Specialist & Treatment in Hyderabad | Dr. Anvesh",
        "h1": "Bone Cancer Treatment in Hyderabad"
    }
}

for old, new in mapping.items():
    filepath = os.path.join(directory, f"{new}.php")
    if not os.path.exists(filepath):
        continue
    
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Replace the old route with the new route
    content = content.replace(f"'/services/{old}'", f"'/services/{new}'")
    # Replace URLs in schema
    content = content.replace(f"https://dranveshdharanikota.com/services/{old}", f"https://dranveshdharanikota.com/services/{new}")
    
    # Replace the Title
    if new in seo_data:
        new_title = seo_data[new]["title"]
        content = re.sub(r"\$title\s*=\s*'[^']+';", f"$title          = '{new_title}';", content)
        content = re.sub(r"\$og_title\s*=\s*'[^']+';", f"$og_title       = '{new_title}';", content)
    
        # Replace the H1
        new_h1 = seo_data[new]["h1"]
        content = re.sub(r"<h1 class=\"page-title page-title--on-dark\">[^<]+</h1>", f"<h1 class=\"page-title page-title--on-dark\">{new_h1}</h1>", content)
    
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)

print("Updated service files.")
