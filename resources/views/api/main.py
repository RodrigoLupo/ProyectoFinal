from fastapi import FastAPI, HTTPException

app = FastAPI()

@app.post("/enviarAPI")
async def recibir_datos_usuarios(data: dict):
    usuarios_dict = data.get('users', [])
    
    return {"users": usuarios_dict}
