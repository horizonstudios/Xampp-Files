using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class CameraSystem : MonoBehaviour
{

    public float minX;
    public float maxX;
    public float minY;
    public float maxY;

    private GameObject player;
    

    // Update is called once per frame
    void LateUpdate()
    {
        if (player != null)
        {
            float x = Mathf.Clamp(player.transform.position.x, minX, maxX);
            float y = Mathf.Clamp(player.transform.position.y, minY, maxY);
            gameObject.transform.position = new Vector3(x, y, gameObject.transform.position.z);
        }
        else
        {
            player = GameObject.FindGameObjectWithTag("Player");
        }
    }
}
